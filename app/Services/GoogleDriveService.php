<?php
namespace App\Services;

use Google\Client;
use Google\Service\Drive;

class GoogleDriveService
{
    protected $driveService;

    public function __construct()
    {
        $client = new Client();

        // قراءة JSON من متغير البيئة
        $jsonCredentials = env('GOOGLE_DRIVE_CREDENTIALS_JSON');

        // التأكد أن المتغير موجود
        if (!$jsonCredentials) {
            throw new \Exception("GOOGLE_DRIVE_CREDENTIALS_JSON is not set.");
        }

        // إنشاء ملف مؤقت من JSON
        $tempFile = tempnam(sys_get_temp_dir(), 'gdrive');
        file_put_contents($tempFile, $jsonCredentials);

        $client->setAuthConfig($tempFile);
        $client->addScope(Drive::DRIVE_READONLY);

        $this->driveService = new Drive($client);
    }

    public function listFiles($folderId)
    {
        $query = "'$folderId' in parents and trashed = false and mimeType contains 'image/'";

        $response = $this->driveService->files->listFiles([
            'q' => $query,
            'fields' => 'files(id, name)',
        ]);

        return collect($response->files)->map(function ($file) {
            return [
                'id' => $file->id,
                'name' => $file->name,
                'directLink' => "https://drive.google.com/thumbnail?id={$file->id}&sz=w1000",
            ];
        });
    }

    public function listSubFolders($parentFolderId)
    {
        $query = "'$parentFolderId' in parents and trashed = false and mimeType = 'application/vnd.google-apps.folder'";

        $response = $this->driveService->files->listFiles([
            'q' => $query,
            'fields' => 'files(id, name)',
        ]);

        return collect($response->files);
    }
}

