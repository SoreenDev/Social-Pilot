<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Response Messages
    |--------------------------------------------------------------------------
    |
    | This file contains common response messages used throughout the API.
    | Keeping responses centralized improves maintainability and consistency.
    |
    */

    'non' => 'No message has been recorded.',

    'success' => [
        'index' => 'The list of :items was retrieved successfully.',
        'show' => 'The details of :item were retrieved successfully.',
        'store' => ':item was created successfully.',
        'update' => ':item was updated successfully.',
        'deleted' => ':item was deleted successfully.',
    ],

    'error' => [
        'index' => 'Failed to retrieve the list of :items.',
        'show' => 'Failed to retrieve the details of :item.',
        'store' => 'Failed to create :item.',
        'update' => 'Failed to update :item.',
        'deleted' => 'Failed to delete :item.',
    ],

    'status' => [
        200 => 'The request was successful.',
        201 => 'Created successfully.',
        202 => 'The request has been accepted for processing.',
        204 => 'The request was successful, but no content was returned.',
        400 => 'The request is invalid. Please check your input.',
        404 => ':item was not found.',
        429 => 'Too many requests. Please slow down.',
        500 => 'Internal server error. Please try again later.',
    ],

    'file' => [
        'error' => [
            'upload' => 'Failed to upload :item.',
            'retrieve' => 'Failed to retrieve file :item.',
            'delete' => 'Failed to delete file :item.',
            'rename' => 'Failed to rename file :item.',
            'move' => 'Failed to move file :item.',
            'store' => 'Failed to store file :item.',
        ],

        'success' => [
            'upload' => ':item was uploaded successfully.',
            'retrieve' => ':item was retrieved successfully.',
            'delete' => ':item was deleted successfully.',
            'rename' => ':item was renamed successfully.',
            'move' => ':item was moved successfully.',
            'store' => ':item was stored successfully.',
        ],
    ],

];
