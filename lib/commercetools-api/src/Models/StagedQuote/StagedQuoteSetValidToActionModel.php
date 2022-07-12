<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteSetValidToActionModel extends JsonObjectModel implements StagedQuoteSetValidToAction
{
    public const DISCRIMINATOR_VALUE = 'setValidTo';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?DateTimeImmutable
     */
    protected $validTo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $validTo = null
    ) {
        $this->validTo = $validTo;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If <code>validTo</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        if (is_null($this->validTo)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_TO);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->validTo = $data;
        }

        return $this->validTo;
    }


    /**
     * @param ?DateTimeImmutable $validTo
     */
    public function setValidTo(?DateTimeImmutable $validTo): void
    {
        $this->validTo = $validTo;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[StagedQuoteSetValidToAction::FIELD_VALID_TO]) && $data[StagedQuoteSetValidToAction::FIELD_VALID_TO] instanceof \DateTimeImmutable) {
            $data[StagedQuoteSetValidToAction::FIELD_VALID_TO] = $data[StagedQuoteSetValidToAction::FIELD_VALID_TO]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
