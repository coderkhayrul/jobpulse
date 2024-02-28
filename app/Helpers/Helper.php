<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;



if (!function_exists('getRole')) {
    function getRole($role)
    {
        $roles = [
            1 => 'Admin',
            2 => 'Company',
            3 => 'Candidate',
        ];
        return $roles[$role];
    }
}

function success(string $message = 'Success', array $data = [], int $statusCode = 200, bool $success = true): JsonResponse
{
    return response()->json([
        'success' => $success,
        'message' => $message,
        'data' => $data,
    ], $statusCode);
}

function error($message = 'Error', $data = [], $statusCode = 404, $error = true): JsonResponse
{
    return response()->json([
        'error' => $error,
        'message' => $message,
        'data' => $data,
    ], $statusCode);
}

function makeDirectory($location): void
{
    if (!File::isDirectory(public_path() . $location)) {
        File::makeDirectory(public_path() . $location, 0777, true, true);
    }
}

function saveImage($image, $location): string
{
    makeDirectory($location);
    $image_name = random_int(10000000, 99999999) . '.' . $image->getClientOriginalExtension();
    $image = Image::make($image)->save(public_path() . $location . $image_name);
    return $location . $image_name;
}

function deleteImage($image): void
{
    if (File::exists(public_path() . $image)) {
        File::delete(public_path() . $image);
    }
}

function roleName($role_id)
{
    $roles = [
        1 => 'Admin',
        2 => 'Company',
        3 => 'Candidate',
    ];
    return $roles[$role_id];
}
