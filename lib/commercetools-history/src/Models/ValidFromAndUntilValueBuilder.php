<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ValidFromAndUntilValue>
 */
final class ValidFromAndUntilValueBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $validFrom;

    /**
     * @var ?string
     */
    private $validUntil;

    /**
     * @return null|string
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return null|string
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param ?string $validFrom
     * @return $this
     */
    public function withValidFrom(?string $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?string $validUntil
     * @return $this
     */
    public function withValidUntil(?string $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }


    public function build(): ValidFromAndUntilValue
    {
        return new ValidFromAndUntilValueModel(
            $this->validFrom,
            $this->validUntil
        );
    }

    public static function of(): ValidFromAndUntilValueBuilder
    {
        return new self();
    }
}
