<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Chat\V1;

// This file is auto-generated. Do not edit!

final class ChatV1
{
    public const string InitiateChat = 'Chat.InitiateChat.v1';
    public static function createInitiateChat(
        string $data
    ): InitiateChat {
        static $template;
        $template ??= new InitiateChat();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }
    public const string InitiateChatResponse = 'Chat.InitiateChatResponse.v1';
    public static function createInitiateChatResponse(
        string $data
    ): InitiateChatResponse {
        static $template;
        $template ??= new InitiateChatResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }
    public const string MessageWritten = 'Chat.MessageWritten.v1';
    public static function createMessageWritten(
        string $data
    ): MessageWritten {
        static $template;
        $template ??= new MessageWritten();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }
}
