<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifierBuilder;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentResponsesPayload>
 */
final class AgentResponsesPayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $outputType;

    /**

     * @var ?string
     */
    private $locale;

    /**

     * @var ?string
     */
    private $prompt;

    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $businessUnit;

    /**

     * @var null|StoreResourceIdentifier|StoreResourceIdentifierBuilder
     */
    private $store;

    /**

     * @var null|ShoppingListResourceIdentifier|ShoppingListResourceIdentifierBuilder
     */
    private $shoppingList;

    /**
     * <p>The entity to create.</p>
     *

     * @return null|string
     */
    public function getOutputType()
    {
        return $this->outputType;
    }

    /**
     * <p>A valid BCP 47 language tag, for example <code>en-US</code>.</p>
     *

     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>Natural-language description of the entity to create, such as the body of an email or a note. Required if no file is attached and <code>shoppingList</code> is not set. For a Shopping List, the name of the list must be stated in either the prompt or an attached file.</p>
     *

     * @return null|string
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> to use for the request. Takes precedence over the Business Unit of the Shopping List in <code>shoppingList</code>. If omitted, Intake resolves it from the input or from the Shopping List.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:Store">Store</a> to use for the request. Takes precedence over the Store of the Shopping List in <code>shoppingList</code>. If omitted, Intake resolves it from the input or from the Shopping List.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        return $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p><a href="ctp:api:type:ShoppingList">ShoppingList</a> to create the Cart or Quote Request from. Intake reads the list once and uses its Line Items as the Products of the request. The ShoppingList must exist and be accessible to the caller.</p>
     * <p>If the Shopping List can't be read, a <a href="ctp:api:type:AgentShoppingListUnresolvedError">ShoppingListUnresolved</a> error is returned.</p>
     * <p>If files are attached, an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     * <p>If <code>outputType</code> is <code>ShoppingList</code>, an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     *

     * @return null|ShoppingListResourceIdentifier
     */
    public function getShoppingList()
    {
        return $this->shoppingList instanceof ShoppingListResourceIdentifierBuilder ? $this->shoppingList->build() : $this->shoppingList;
    }

    /**
     * @param ?string $outputType
     * @return $this
     */
    public function withOutputType(?string $outputType)
    {
        $this->outputType = $outputType;

        return $this;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param ?string $prompt
     * @return $this
     */
    public function withPrompt(?string $prompt)
    {
        $this->prompt = $prompt;

        return $this;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     * @return $this
     */
    public function withStore(?StoreResourceIdentifier $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param ?ShoppingListResourceIdentifier $shoppingList
     * @return $this
     */
    public function withShoppingList(?ShoppingListResourceIdentifier $shoppingList)
    {
        $this->shoppingList = $shoppingList;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitResourceIdentifierBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreResourceIdentifierBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @deprecated use withShoppingList() instead
     * @return $this
     */
    public function withShoppingListBuilder(?ShoppingListResourceIdentifierBuilder $shoppingList)
    {
        $this->shoppingList = $shoppingList;

        return $this;
    }

    public function build(): AgentResponsesPayload
    {
        return new AgentResponsesPayloadModel(
            $this->outputType,
            $this->locale,
            $this->prompt,
            $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->store instanceof StoreResourceIdentifierBuilder ? $this->store->build() : $this->store,
            $this->shoppingList instanceof ShoppingListResourceIdentifierBuilder ? $this->shoppingList->build() : $this->shoppingList
        );
    }

    public static function of(): AgentResponsesPayloadBuilder
    {
        return new self();
    }
}
