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
        $client->setAuthConfig(storage_path(env('GOOGLE_DRIVE_CREDENTIALS')));
        $client->addScope(Drive::DRIVE_READONLY);

        $this->driveService = new Drive($client);
    }

    /**
     * تجيب الصور داخل مجلد
     */
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

    /**
     * تجيب المجلدات اللي داخل مجلد
     */
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
