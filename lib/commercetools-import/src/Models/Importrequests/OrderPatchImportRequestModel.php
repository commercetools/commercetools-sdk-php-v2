<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\OrderPatches\OrderPatchImportCollection;
use stdClass;

/**
 * @internal
 */
final class OrderPatchImportRequestModel extends JsonObjectModel implements OrderPatchImportRequest
{
    public const DISCRIMINATOR_VALUE = 'order-patch';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?OrderPatchImportCollection
     */
    protected $patches;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderPatchImportCollection $patches = null
    ) {
        $this->patches = $patches;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of the import resource.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The order patches of this request</p>
     *
     * @return null|OrderPatchImportCollection
     */
    public function getPatches()
    {
        if (is_null($this->patches)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PATCHES);
            if (is_null($data)) {
                return null;
            }
            $this->patches = OrderPatchImportCollection::fromArray($data);
        }

        return $this->patches;
    }


    /**
     * @param ?OrderPatchImportCollection $patches
     */
    public function setPatches(?OrderPatchImportCollection $patches): void
    {
        $this->patches = $patches;
    }
}
