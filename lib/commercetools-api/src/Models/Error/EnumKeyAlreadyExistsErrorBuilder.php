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
 * @implements Builder<EnumKeyAlreadyExistsError>
 */
final class EnumKeyAlreadyExistsErrorBuilder implements Builder
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
     * <p><code>&quot;The $attributeName attribute definition already contains an enum value with the key $enumKey.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Conflicting enum key.</p>
     *

     * @return null|string
     */
    public function getConflictingEnumKey()
    {
        return $this->conflictingEnumKey;
    }

    /**
     * <p>Name of the conflicting Attribute.</p>
     *

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


    public function build(): EnumKeyAlreadyExistsError
    {
        return new EnumKeyAlreadyExistsErrorModel(
            $this->message,
            $this->conflictingEnumKey,
            $this->conflictingAttributeName
        );
    }

    public static function of(): EnumKeyAlreadyExistsErrorBuilder
    {
        return new self();
    }
}
