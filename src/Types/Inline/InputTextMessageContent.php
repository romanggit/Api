<?php
/**
 * Created by PhpStorm.
 * User: iGusev
 * Date: 14/04/16
 * Time: 14:41
 */

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

class InputTextMessageContent extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['message_text'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'message_text' => true,
        'parse_mode' => true,
        'disable_web_page_preview' => true,
    ];

    /**
     * Text of the message to be sent, 1-4096 characters
     *
     * @var string
     */
    protected $messageText;

    /**
     * Optional. Send Markdown or HTML,
     * if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
     *
     * @var string
     */
    protected $parseMode;

    /**
     * Optional. Disables link previews for links in the sent message
     *
     * @var bool
     */
    protected $disableWebPagePreview;

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * @param string $messageText
     */
    public function setMessageText($messageText)
    {
        $this->messageText = $messageText;
    }

    /**
     * @return string
     */
    public function getParseMode()
    {
        return $this->parseMode;
    }

    /**
     * @param string $parseMode
     */
    public function setParseMode($parseMode)
    {
        $this->parseMode = $parseMode;
    }

    /**
     * @return boolean
     */
    public function isDisableWebPagePreview()
    {
        return $this->disableWebPagePreview;
    }

    /**
     * @param boolean $disableWebPagePreview
     */
    public function setDisableWebPagePreview($disableWebPagePreview)
    {
        $this->disableWebPagePreview = $disableWebPagePreview;
    }
}