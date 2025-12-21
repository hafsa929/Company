<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleDriveService;

class GalleryController extends Controller
{
    public function index(Request $request, GoogleDriveService $drive)
    {
        $category = $request->get('cat'); // مثال: flowers

        $folderId = match ($category) {
            'flowers' => env('GOOGLE_DRIVE_FLOWERS_FOLDER_ID'),
            'clothes' => env('GOOGLE_DRIVE_CLOTHES_FOLDER_ID'),
            'graduation' => env('GOOGLE_DRIVE_GRADUATION_FOLDER_ID'),
            'printing' => env('GOOGLE_DRIVE_PRINTING_FOLDER_ID'),
            'packaging' => env('GOOGLE_DRIVE_PACKAGING_FOLDER_ID'),
            'Phone_covers' => env('GOOGLE_DRIVE_PHONE_COVERS_FOLDER_ID'),

            default => null,
        };

        if (!$folderId) {
            return view('gallery', [
                'category' => $category,
                'groups' => collect(),
            ]);
        }

        // صور المجلد الرئيسي
        $mainImages = $drive->listFiles($folderId);

        // جلب المجلدات الفرعية
        $subFolders = $drive->listSubFolders($folderId);
        $groups = $subFolders->map(function ($folder) use ($drive) {
            return [
                'name' => $folder->name,
                'images' => $drive->listFiles($folder->id),
            ];
        });

        // نضيف المجلد الرئيسي كمجموعة إذا فيه صور
        if ($mainImages->isNotEmpty()) {
            $groups->prepend([
                'name' => '',
                'images' => $mainImages,
            ]);
        }

        // 🔹 مهم: نرجع View مع البيانات
        return view('gallery', [
            'category' => $category,
            'groups' => $groups,
        ]);
    }
}
