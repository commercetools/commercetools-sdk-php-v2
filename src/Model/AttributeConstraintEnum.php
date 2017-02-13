<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeConstraintEnum extends JsonObject {
 const NONE = 'None';
 const UNIQUE = 'Unique';
 const COMBINATIONUNIQUE = 'CombinationUnique';
 const SAMEFORALL = 'SameForAll';
}
