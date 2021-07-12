<?php


namespace Commercetools\Exception;


use AsyncAws\Core\Exception\Exception;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


trait ExceptionToStringTrait
{
    /**
     * @return string
     */
    abstract function getMessage();

    /**
     * @return ResponseInterface
     */
    abstract function getResponse();

    /**
     * @return RequestInterface
     */
    abstract function getRequest();

    public function __toString() {
        $request = $this->getRequest();
        if ($request != null) {
            $method = $request->getMethod();
            $uri = $request->getUri();
        } else {
            $method = "<unknown>";
            $uri = "";
        }
        return "detailMessage: " . $this->getMessage() . PHP_EOL .
            $this->responseBodyFormatted() . PHP_EOL .
            "endpoint: $method $uri" . PHP_EOL .
            "";
    }

    private function responseBodyFormatted(): string {
        $response = $this->getResponse();
        $content = $response != null ? (string)$response->getBody() : "<unknown>";
        return "http response body: " . $content;
    }
}
