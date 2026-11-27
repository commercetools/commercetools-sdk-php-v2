<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\ShoppingList\ShoppingListResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesPayload extends JsonObject
{
    public const FIELD_OUTPUT_TYPE = 'outputType';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_PROMPT = 'prompt';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';
    public const FIELD_SHOPPING_LIST = 'shoppingList';

    /**
     * <p>The entity to create.</p>
     *

     * @return null|string
     */
    public function getOutputType();

    /**
     * <p>A valid BCP 47 language tag, for example <code>en-US</code>.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Natural-language description of the entity to create, such as the body of an email or a note. Required if no file is attached and <code>shoppingList</code> is not set. For a Shopping List, the name of the list must be stated in either the prompt or an attached file.</p>
     *

     * @return null|string
     */
    public function getPrompt();

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> to use for the request. Takes precedence over the Business Unit of the Shopping List in <code>shoppingList</code>. If omitted, Intake resolves it from the input or from the Shopping List.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:Store">Store</a> to use for the request. Takes precedence over the Store of the Shopping List in <code>shoppingList</code>. If omitted, Intake resolves it from the input or from the Shopping List.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * <p><a href="ctp:api:type:ShoppingList">ShoppingList</a> to create the Cart or Quote Request from. Intake reads the list once and uses its Line Items as the Products of the request. The ShoppingList must exist and be accessible to the caller.</p>
     * <p>If the Shopping List can't be read, a <a href="ctp:api:type:AgentShoppingListUnresolvedError">ShoppingListUnresolved</a> error is returned.</p>
     * <p>If files are attached, an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     * <p>If <code>outputType</code> is <code>ShoppingList</code>, an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     *

     * @return null|ShoppingListResourceIdentifier
     */
    public function getShoppingList();

    /**
     * @param ?string $outputType
     */
    public function setOutputType(?string $outputType): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $prompt
     */
    public function setPrompt(?string $prompt): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;

    /**
     * @param ?ShoppingListResourceIdentifier $shoppingList
     */
    public function setShoppingList(?ShoppingListResourceIdentifier $shoppingList): void;
}
