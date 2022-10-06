<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitSetAssociatesActionModel extends JsonObjectModel implements BusinessUnitSetAssociatesAction
{
    public const DISCRIMINATOR_VALUE = 'setAssociates';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?AssociateDraftCollection
     */
    protected $associates;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateDraftCollection $associates = null,
        ?string $action = null
    ) {
        $this->associates = $associates;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>The new list of Associates. If not provided, any existing list is removed.</p>
     *
     *
     * @return null|AssociateDraftCollection
     */
    public function getAssociates()
    {
        if (is_null($this->associates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATES);
            if (is_null($data)) {
                return null;
            }
            $this->associates = AssociateDraftCollection::fromArray($data);
        }

        return $this->associates;
    }


    /**
     * @param ?AssociateDraftCollection $associates
     */
    public function setAssociates(?AssociateDraftCollection $associates): void
    {
        $this->associates = $associates;
    }
}
