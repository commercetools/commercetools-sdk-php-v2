<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class MyShoppingListSetTextLineItemDescriptionActionModel extends JsonObjectModel implements MyShoppingListSetTextLineItemDescriptionAction
{
    public const DISCRIMINATOR_VALUE = 'setTextLineItemDescription';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $textLineItemId;

    /**
     * @var ?LocalizedString
     */
    protected $description;


    public function __construct(
        string $textLineItemId = null,
        LocalizedString $description = null
    ) {
        $this->textLineItemId = $textLineItemId;
        $this->description = $description;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyShoppingListUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyShoppingListSetTextLineItemDescriptionAction::FIELD_TEXT_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItemId = (string) $data;
        }

        return $this->textLineItemId;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyShoppingListSetTextLineItemDescriptionAction::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    public function setTextLineItemId(?string $textLineItemId): void
    {
        $this->textLineItemId = $textLineItemId;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }



}
