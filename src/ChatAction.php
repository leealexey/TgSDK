<?php

namespace leealex\telegram;

/**
 * Type of action to broadcast
 * @package leealex\telegram
 */
class ChatAction
{
    const TYPING = 'typing';
    const UPLOAD_photo = 'upload_photo';
    const UPLOAD_VIDEO = 'upload_video';
    const UPLOAD_VOICE = 'upload_voice';
    const UPLOAD_DOCUMENT = 'upload_document';
    const FIND_LOCATION = 'find_location';
    const UPLOAD_VIDEO_NOTE = 'upload_video_note';
}
