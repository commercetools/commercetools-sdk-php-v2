<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentProductsNotFoundWarning extends WarningObject
{
    public const FIELD_PRODUCTS = 'products';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of the omitted Products.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Identifiers of the Products that could not be matched to the catalog or are unavailable in the bound Store, as they appeared in the input.</p>
     *

     * @return null|array
     */
    public function getProducts();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?array $products
     */
    public function setProducts(?array $products): void;
}
