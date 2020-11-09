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
 * @implements Builder<EnumKeyDoesNotExistError>
 */
final class EnumKeyDoesNotExistErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $conflictingEnumKey;

    /**
     * @var ?string
     */
    private $conflictingAttributeName;

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
    public function getConflictingEnumKey()
    {
        return $this->conflictingEnumKey;
    }

    /**
     * @return null|string
     */
    public function getConflictingAttributeName()
    {
        return $this->conflictingAttributeName;
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
     * @param ?string $conflictingEnumKey
     * @return $this
     */
    public function withConflictingEnumKey(?string $conflictingEnumKey)
    {
        $this->conflictingEnumKey = $conflictingEnumKey;

        return $this;
    }

    /**
     * @param ?string $conflictingAttributeName
     * @return $this
     */
    public function withConflictingAttributeName(?string $conflictingAttributeName)
    {
        $this->conflictingAttributeName = $conflictingAttributeName;

        return $this;
    }


    public function build(): EnumKeyDoesNotExistError
    {
        return new EnumKeyDoesNotExistErrorModel(
            $this->message,
            $this->conflictingEnumKey,
            $this->conflictingAttributeName
        );
    }

    public static function of(): EnumKeyDoesNotExistErrorBuilder
    {
        return new self();
    }
}
