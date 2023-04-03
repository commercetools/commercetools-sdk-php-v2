<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailure;
use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailureModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLEditPreviewFailedErrorModel extends JsonObjectModel implements GraphQLEditPreviewFailedError
{
    public const DISCRIMINATOR_VALUE = 'EditPreviewFailed';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?OrderEditPreviewFailure
     */
    protected $result;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderEditPreviewFailure $result = null,
        ?string $code = null
    ) {
        $this->result = $result;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>State of the OrderEdit where the <code>stagedActions</code> cannot be applied to the Order.</p>
     *
     *
     * @return null|OrderEditPreviewFailure
     */
    public function getResult()
    {
        if (is_null($this->result)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESULT);
            if (is_null($data)) {
                return null;
            }

            $this->result = OrderEditPreviewFailureModel::of($data);
        }

        return $this->result;
    }


    /**
     * @param ?OrderEditPreviewFailure $result
     */
    public function setResult(?OrderEditPreviewFailure $result): void
    {
        $this->result = $result;
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

        return $data;
    }
}
