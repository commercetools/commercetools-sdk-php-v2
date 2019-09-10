<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObjectModel;

final class ShoppingListSetDeleteDaysAfterLastModificationActionModel extends JsonObjectModel implements ShoppingListSetDeleteDaysAfterLastModificationAction
{
    const DISCRIMINATOR_VALUE = 'setDeleteDaysAfterLastModification';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;

    public function __construct(
        string $action = null,
        int $deleteDaysAfterLastModification = null
    ) {
        $this->action = $action;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListSetDeleteDaysAfterLastModificationAction::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterLastModification = (int) $data;
        }

        return $this->deleteDaysAfterLastModification;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
}
