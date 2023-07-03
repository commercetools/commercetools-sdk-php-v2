<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;

interface TextLineItemValue extends JsonObject
{

    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Name of the TextLineItem.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;
}
