<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedPriceDraftModel extends JsonObjectModel implements StagedPriceDraft
{
    /**
     *
     * @var ?TypedMoneyDraft
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoneyDraft $value = null
    ) {
        $this->value = $value;
    }

    /**
     * <p>Money value for the StagedPriceDraft.</p>
     *
     *
     * @return null|TypedMoneyDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }


    /**
     * @param ?TypedMoneyDraft $value
     */
    public function setValue(?TypedMoneyDraft $value): void
    {
        $this->value = $value;
    }
}
