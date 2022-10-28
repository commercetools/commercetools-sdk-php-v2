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
 * @implements Builder<AttributeNameDoesNotExistError>
 */
final class AttributeNameDoesNotExistErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?string
     */
    private $invalidAttributeName;

    /**

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**

     * @return null|string
     */
    public function getInvalidAttributeName()
    {
        return $this->invalidAttributeName;
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
     * @param ?string $invalidAttributeName
     * @return $this
     */
    public function withInvalidAttributeName(?string $invalidAttributeName)
    {
        $this->invalidAttributeName = $invalidAttributeName;

        return $this;
    }


    public function build(): AttributeNameDoesNotExistError
    {
        return new AttributeNameDoesNotExistErrorModel(
            $this->message,
            $this->invalidAttributeName
        );
    }

    public static function of(): AttributeNameDoesNotExistErrorBuilder
    {
        return new self();
    }
}
