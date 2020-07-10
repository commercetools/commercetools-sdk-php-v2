<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class AttributesModel extends JsonObjectModel implements Attributes
{



    public function __construct(
    ) {

    }



    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }
        if (preg_match(Attributes::FIELD_PATTERN0, $key) === 1) {
            /** @psalm-var stdClass $data */
            return JsonObjectModel::of($data);
        }

        return $data;
    }


}
