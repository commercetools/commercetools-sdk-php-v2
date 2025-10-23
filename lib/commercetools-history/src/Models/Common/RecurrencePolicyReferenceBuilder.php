<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurrencePolicyReference>
 */
final class RecurrencePolicyReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }


    public function build(): RecurrencePolicyReference
    {
        return new RecurrencePolicyReferenceModel(
            $this->id
        );
    }

    public static function of(): RecurrencePolicyReferenceBuilder
    {
        return new self();
    }
}
