<?php

namespace leealex\telegram\types;

/**
 * This object represents a message.
 *
 * @see https://core.telegram.org/bots/api#message
 * @package leealex\telegram\types
 *
 * @property integer $message_id Unique message identifier inside this chat
 *
 * @property User $from Optional. Sender, empty for messages sent to channels
 *
 * @property Chat $sender_chat Optional. Sender of the message, sent on behalf of a chat. The channel itself for
 * channel messages. The supergroup itself for messages from anonymous group administrators. The linked channel for
 * messages automatically forwarded to the discussion group
 *
 * @property integer $date Date the message was sent in Unix time
 *
 * @property Chat $chat Conversation the message belongs to
 *
 * @property User $forward_from Optional. For forwarded messages, sender of the original message
 *
 * @property Chat $forward_from_chat Optional. For messages forwarded from channels or from anonymous administrators,
 * information about the original sender chat
 *
 * @property integer $forward_from_message_id Optional. For messages forwarded from channels, identifier of the original
 * message in the channel
 *
 * @property string $forward_signature Optional. For messages forwarded from channels, signature of the post author if present
 *
 * @property string $forward_sender_name Optional. Sender's name for messages forwarded from users who disallow
 * adding a link to their account in forwarded messages
 *
 * @property integer $forward_date Optional. For forwarded messages, date the original message was sent in Unix time
 *
 * @property Message $reply_to_message Optional. For replies, the original message. Note that the Message object in this
 * field will not contain further reply_to_message fields even if it itself is a reply.
 *
 * @property User $via_bot Optional. Bot through which the message was sent
 *
 * @property integer $edit_date Optional. Date the message was last edited in Unix time
 *
 * @property string $media_group_id Optional. The unique identifier of a media message group this message belongs to
 *
 * @property string $author_signature Optional. Signature of the post author for messages in channels, or the custom
 * title of an anonymous group administrator
 *
 * @property string $text Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
 *
 * @property MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs,
 * bot commands, etc. that appear in the text
 *
 * @property Animation $animation Optional. Message is an animation, information about the animation.
 * For backward compatibility, when this field is set, the document field will also be set
 *
 * @property Audio $audio Optional. Message is an audio file, information about the file
 *
 * @property Document $document Optional. Message is a general file, information about the file
 *
 * @property PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
 *
 * @property Sticker $sticker Optional. Message is a sticker, information about the sticker
 *
 * @property Video $video Optional. Message is a video, information about the video
 *
 * @property VideoNote $video_note Optional. Message is a video note, information about the video message
 *
 * @property Voice $voice Optional. Message is a voice message, information about the file
 *
 * @property string $caption Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
 *
 * @property MessageEntity[] $caption_entities Optional. For messages with a caption, special entities like usernames,
 * URLs, bot commands, etc. that appear in the caption
 *
 * @property Contact $contact Optional. Message is a shared contact, information about the contact
 *
 * @property Dice $dice Optional. Message is a dice with random value
 *
 * @property Game $game Optional. Message is a game, information about the game.
 * More about games @see https://core.telegram.org/bots/api#games
 *
 * @property Poll $poll Optional. Message is a native poll, information about the poll
 *
 * @property Venue $venue Optional. Message is a venue, information about the venue. For backward compatibility,
 * when this field is set, the location field will also be set
 *
 * @property Location $location Optional. Message is a shared location, information about the location
 *
 * @property User[] $new_chat_members Optional. New members that were added to the group or supergroup and information
 * about them (the bot itself may be one of these members)
 *
 * @property User $left_chat_member Optional. A member was removed from the group, information about them
 * (this member may be the bot itself)
 *
 * @property string $new_chat_title Optional. A chat title was changed to this value
 *
 * @property string $new_chat_photo Optional. A chat photo was change to this value
 *
 * @property true $delete_chat_photo Optional. Service message: the chat photo was deleted
 *
 * @property true $group_chat_created Optional. Service message: the group has been created
 *
 * @property true $supergroup_chat_created Optional. Service message: the supergroup has been created. This field
 * can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is
 * created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 *
 * @property true $channel_chat_created Optional. Service message: the channel has been created. This field can't be
 * received in a message coming through updates, because bot can't be a member of a channel when it is created.
 * It can only be found in reply_to_message if someone replies to a very first message in a channel.
 *
 * @property integer $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified
 * identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects
 * in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are
 * safe for storing this identifier.
 *
 * @property integer $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified
 * identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects
 * in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are
 * safe for storing this identifier.
 *
 * @property Message $pinned_message Optional. Specified message was pinned. Note that the Message object in this field
 * will not contain further reply_to_message fields even if it is itself a reply.
 *
 * @property Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice.
 * More about payments @see https://core.telegram.org/bots/api#payments
 *
 * @property SuccessfulPayment $successful_payment Optional. Message is a service message about a successful payment,
 * information about the payment. More about payments @see https://core.telegram.org/bots/api#payments
 *
 * @property string $connected_website Optional. The domain name of the website on which the user has logged in.
 * More about Telegram Login @see https://core.telegram.org/widgets/login
 *
 * @property PassportData $passport_data Optional. Telegram Passport data
 *
 * @property ProximityAlertTriggered $proximity_alert_triggered Optional. Service message. A user in the chat triggered
 * another user's proximity alert while sharing Live Location.
 *
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message.
 * login_url buttons are represented as ordinary url buttons.
 */
class Message extends BaseType
{
}
