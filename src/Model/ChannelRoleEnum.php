<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ChannelRoleEnum extends JsonObject {
 const INVENTORYSUPPLY = 'InventorySupply';
 const PRODUCTDISTRIBUTION = 'ProductDistribution';
 const ORDEREXPORT = 'OrderExport';
 const ORDERIMPORT = 'OrderImport';
 const PRIMARY = 'Primary';
}
