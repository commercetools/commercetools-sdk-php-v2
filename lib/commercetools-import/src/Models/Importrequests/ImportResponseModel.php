<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Importitems\ImportItemCollection;
use stdClass;

final class ImportResponseModel extends JsonObjectModel implements ImportResponse
{
    /**
     * @var ?ImportItemCollection
     */
    protected $items;

    public function __construct(
        ImportItemCollection $items = null
    ) {
        $this->items = $items;
    }

    /**
     * @return null|ImportItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImportResponse::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = ImportItemCollection::fromArray($data);
        }

        return $this->items;
    }

    public function setItems(?ImportItemCollection $items): void
    {
        $this->items = $items;
    }
}
