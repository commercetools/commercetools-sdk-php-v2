<?php


namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;

trait AddressDraftTrait
{
    public function toAddressDraft(): AddressDraft
    {
        /** @var \stdClass $data */
        $data = $this->jsonSerialize();
        return AddressDraftModel::of($data);
    }
}
