<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionError>
 */
final class ExtensionErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $code;

    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $extensionId;

    /**

     * @var ?string
     */
    private $extensionKey;

    /**
     * <p>Error code caused by the Extension. For example, <code>InvalidField</code>.</p>
     *

     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <p>Plain text description of the error.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * <p>User-defined unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionKey()
    {
        return $this->extensionKey;
    }

    /**
     * @param ?string $code
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?string $extensionId
     * @return $this
     */
    public function withExtensionId(?string $extensionId)
    {
        $this->extensionId = $extensionId;

        return $this;
    }

    /**
     * @param ?string $extensionKey
     * @return $this
     */
    public function withExtensionKey(?string $extensionKey)
    {
        $this->extensionKey = $extensionKey;

        return $this;
    }


    public function build(): ExtensionError
    {
        return new ExtensionErrorModel(
            $this->code,
            $this->message,
            $this->extensionId,
            $this->extensionKey
        );
    }

    public static function of(): ExtensionErrorBuilder
    {
        return new self();
    }
}
