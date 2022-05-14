<?php

return [
    'users_table' => 'users',
    'password_resets_table' => 'password_resets',
    'blocks_table' => 'blocks',
    'features_table' => 'features',
    'settings_table' => 'settings',
    'medias_table' => 'medias',
    'mediables_table' => 'mediables',
    'files_table' => 'files',
    'fileables_table' => 'fileables',
    'related_table' => 'related',
    'tags_table' => 'tags',
    'tagged_table' => 'tagged',
    'admin_middleware_group' => 'web',
    'admin_middleware_name' => 'admin',
    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
    ],
    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 's3'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Imgix'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
        /*
        |--------------------------------------------------------------------------
        | Wysiwyg options for the caption field.
        |--------------------------------------------------------------------------
        */
        'media_caption_use_wysiwyg' => false,
        'media_caption_wysiwyg_options' => [
            'modules' => [
                'toolbar' => [
                    'bold',
                    'italic',
                ],
            ],
        ],
    ],
    'file_library' => [
        'disk' => 'twill_file_library',
        'endpoint_type' => env('FILE_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH', 'uploads'),
        'acl' => env('FILE_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
    ],
    'blocks' => [
        'disk' => 'twill_blocks',
        'endpoint_type' => env('BLOCKS_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('BLOCKS_CASCADE_DELETE', false),
        'local_path' => env('BLOCKS_LOCAL_PATH', 'uploads'),
        'acl' => env('BLOCKS_ACL', 'private'),
        'filesize_limit' => env('BLOCKS_FILESIZE_LIMIT', 50),
    ],
];