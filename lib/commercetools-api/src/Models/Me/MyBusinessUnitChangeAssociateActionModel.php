<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\AssociateDraft;
use Commercetools\Api\Models\BusinessUnit\AssociateDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyBusinessUnitChangeAssociateActionModel extends JsonObjectModel implements MyBusinessUnitChangeAssociateAction
{
    public const DISCRIMINATOR_VALUE = 'changeAssociate';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?AssociateDraft
     */
    protected $associate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateDraft $associate = null,
        ?string $action = null
    ) {
        $this->associate = $associate;
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
     * <p>The Associate to add.</p>
     *
     *
     * @return null|AssociateDraft
     */
    public function getAssociate()
    {
        if (is_null($this->associate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE);
            if (is_null($data)) {
                return null;
            }

            $this->associate = AssociateDraftModel::of($data);
        }

        return $this->associate;
    }


    /**
     * @param ?AssociateDraft $associate
     */
    public function setAssociate(?AssociateDraft $associate): void
    {
        $this->associate = $associate;
    }
}
