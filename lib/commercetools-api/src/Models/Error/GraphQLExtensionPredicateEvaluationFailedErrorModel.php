<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLExtensionPredicateEvaluationFailedErrorModel extends JsonObjectModel implements GraphQLExtensionPredicateEvaluationFailedError
{
    public const DISCRIMINATOR_VALUE = 'ExtensionPredicateEvaluationFailed';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?ErrorByExtension
     */
    protected $errorByExtension;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ErrorByExtension $errorByExtension = null,
        ?string $code = null
    ) {
        $this->errorByExtension = $errorByExtension;
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
     * <p>Details about the API Extension that was involved in the error.</p>
     *
     *
     * @return null|ErrorByExtension
     */
    public function getErrorByExtension()
    {
        if (is_null($this->errorByExtension)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ERROR_BY_EXTENSION);
            if (is_null($data)) {
                return null;
            }

            $this->errorByExtension = ErrorByExtensionModel::of($data);
        }

        return $this->errorByExtension;
    }


    /**
     * @param ?ErrorByExtension $errorByExtension
     */
    public function setErrorByExtension(?ErrorByExtension $errorByExtension): void
    {
        $this->errorByExtension = $errorByExtension;
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
