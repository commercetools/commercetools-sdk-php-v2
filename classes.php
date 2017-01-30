<?php
declare(strict_types=1);

namespace Commercetools\Raml;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;

class Resource
{
    const TEMPLATE_REGEXP = '/\{([^\{\}]+)\}/';

    /**
     * @param  string  $string
     * @param  mixed $interpolate
     * @param  mixed $defaults
     * @return string
     */
    final protected function template(string $string, array $interpolate = [], array $defaults = []): string {
        return (string)preg_replace_callback(static::TEMPLATE_REGEXP, function ($matches) use ($defaults, $interpolate) {
            $key = $matches[1];
            if (isset($interpolate[$key]) && $interpolate[$key] != null) {
                return urlencode((string)$interpolate[$key]);
            }

            if (isset($defaults[$key]) && $defaults[$key] != null) {
                return urlencode((string)$defaults[$key]);
            }

            return '';
        }, $string);
    }

    private $uri;

    public function __construct(string  $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    final protected function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param $method
     * @param $uri
     * @param mixed $body
     * @param array $options
     * @param string $requestClass
     * @return RequestInterface
     */
    final protected function buildRequest(string  $method, string  $uri, $body = null, array $options = [], $requestClass = ApiRequest::class): RequestInterface
    {
        $headers = isset($options['headers']) ? $options['headers'] : [];
        /**
         * @var RequestInterface $request
         */
        $request = new $requestClass($method, $uri, $headers, $body);

        if (isset($options['query'])) {
            ksort($options['query']);
            $uri = $request->getUri()->withQuery(Psr7\build_query($options['query']));
            $request = $request->withUri($uri);
        }
        

        return $request;
    }
}

class ApiRequest extends Request {
    const API_PATH = '';
}

class RequestBuilder extends Resource
{
    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $baseUriParameters = [];
        if (isset($options['baseUriParameters'])) {
            $baseUriParameters = $options['baseUriParameters'];
        }
        if (isset($options['baseUri'])) {
            $baseUri = $this->template($options['baseUri'], $baseUriParameters);
        } else {
            $baseUri = $this->template('https://api.sphere.io', []);
        }
        parent::__construct(trim($baseUri, '/'));
    }
    
    /**
     * @param string $method
     * @param string $uri
     * @param null $body
     * @param array $options
     * @return RequestInterface
     */
    final public function buildCustom(string $method, string $uri, $body = null, array $options = []): RequestInterface
    {
        if (isset($options['uriParameters'])) {
            $uri = $this->template($this->getUri() . $uri, $options['uriParameters']);
            unset($options['uriParams']);
        } else {
            $uri = $this->getUri() . $uri;
        }
        return $this->buildRequest($method, $uri, $body, $options);
    }


    /**
     * @param $projectKey
     * @return Resource1
     */
    public function withProjectKey($projectKey): Resource1 {
      
        $uri = $this->template($this->getUri() . '/{projectKey}', ['projectKey' => $projectKey]);
        return new Resource1($uri);
    }

}
final class Resource1 extends Resource {
    const API_PATH='/{projectKey}';

    /**
     * @return Resource2
     */
    public function categories(): Resource2 {
        return new Resource2($this->getUri() . '/categories');
    }

    /**
     * @return Resource4
     */
    public function carts(): Resource4 {
        return new Resource4($this->getUri() . '/carts');
    }

    /**
     * @return Resource6
     */
    public function cartDiscounts(): Resource6 {
        return new Resource6($this->getUri() . '/cart-discounts');
    }

    /**
     * @return Resource8
     */
    public function channels(): Resource8 {
        return new Resource8($this->getUri() . '/channels');
    }

    /**
     * @return Resource10
     */
    public function customers(): Resource10 {
        return new Resource10($this->getUri() . '/customers');
    }

    /**
     * @return Resource18
     */
    public function customerGroups(): Resource18 {
        return new Resource18($this->getUri() . '/customer-groups');
    }

    /**
     * @return Resource20
     */
    public function customObjects(): Resource20 {
        return new Resource20($this->getUri() . '/custom-objects');
    }

    /**
     * @return Resource24
     */
    public function discountCodes(): Resource24 {
        return new Resource24($this->getUri() . '/discount-codes');
    }

    /**
     * @return Resource26
     */
    public function graphql(): Resource26 {
        return new Resource26($this->getUri() . '/graphql');
    }

    /**
     * @return Resource27
     */
    public function inventory(): Resource27 {
        return new Resource27($this->getUri() . '/inventory');
    }

    /**
     * @return Resource29
     */
    public function login(): Resource29 {
        return new Resource29($this->getUri() . '/login');
    }

    /**
     * @return Resource30
     */
    public function messages(): Resource30 {
        return new Resource30($this->getUri() . '/messages');
    }

    /**
     * @return Resource32
     */
    public function orders(): Resource32 {
        return new Resource32($this->getUri() . '/orders');
    }

    /**
     * @return Resource35
     */
    public function payments(): Resource35 {
        return new Resource35($this->getUri() . '/payments');
    }

    /**
     * @return Resource37
     */
    public function products(): Resource37 {
        return new Resource37($this->getUri() . '/products');
    }

    /**
     * @return Resource41
     */
    public function productDiscounts(): Resource41 {
        return new Resource41($this->getUri() . '/product-discounts');
    }

    /**
     * @return Resource43
     */
    public function productProjections(): Resource43 {
        return new Resource43($this->getUri() . '/product-projections');
    }

    /**
     * @return Resource48
     */
    public function productTypes(): Resource48 {
        return new Resource48($this->getUri() . '/product-types');
    }

    /**
     * @return Resource51
     */
    public function reviews(): Resource51 {
        return new Resource51($this->getUri() . '/reviews');
    }

    /**
     * @return Resource54
     */
    public function shippingMethods(): Resource54 {
        return new Resource54($this->getUri() . '/shipping-methods');
    }

    /**
     * @return Resource56
     */
    public function states(): Resource56 {
        return new Resource56($this->getUri() . '/states');
    }

    /**
     * @return Resource58
     */
    public function subscriptions(): Resource58 {
        return new Resource58($this->getUri() . '/subscriptions');
    }

    /**
     * @return Resource61
     */
    public function taxCategories(): Resource61 {
        return new Resource61($this->getUri() . '/tax-categories');
    }

    /**
     * @return Resource63
     */
    public function types(): Resource63 {
        return new Resource63($this->getUri() . '/types');
    }

    /**
     * @return Resource66
     */
    public function zones(): Resource66 {
        return new Resource66($this->getUri() . '/zones');
    }

    /**
     * @param $query
     * @param array $options
     * @return Resource1GetRequest
     */
    public function get($query = null, array $options = []): Resource1GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource1GetRequest::class);
    }
}
final class Resource1GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}';
}
final class Resource2 extends Resource {
    const API_PATH='/{projectKey}/categories';

    /**
     * @param $query
     * @param array $options
     * @return Resource2GetRequest
     */
    public function get($query = null, array $options = []): Resource2GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource2GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource2PostRequest
     */
    public function post($body = null, array $options = []): Resource2PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource2PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource3
     */
    public function withId($ID): Resource3 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource3($uri);
    }
}
final class Resource2GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/categories';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource2GetRequest
     */
    public function withWhere($where): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource2GetRequest
     */
    public function withSort($sort): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource2GetRequest
     */
    public function withLimit($limit): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource2GetRequest
     */
    public function withOffset($offset): Resource2GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource2PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/categories';
}
final class Resource3 extends Resource {
    const API_PATH='/{projectKey}/categories/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource3GetRequest
     */
    public function get($query = null, array $options = []): Resource3GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource3GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource3PostRequest
     */
    public function post($body = null, array $options = []): Resource3PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource3PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource3DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource3DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource3DeleteRequest::class);
    }
}
final class Resource3GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/categories/{ID}';
}
final class Resource3PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/categories/{ID}';
}
final class Resource3DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/categories/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource3DeleteRequest
     */
    public function withVersion($version): Resource3DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource4 extends Resource {
    const API_PATH='/{projectKey}/carts';

    /**
     * @param $query
     * @param array $options
     * @return Resource4GetRequest
     */
    public function get($query = null, array $options = []): Resource4GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource4GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource4PostRequest
     */
    public function post($body = null, array $options = []): Resource4PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource4PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource5
     */
    public function withId($ID): Resource5 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource5($uri);
    }
}
final class Resource4GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/carts';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource4GetRequest
     */
    public function withWhere($where): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource4GetRequest
     */
    public function withSort($sort): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource4GetRequest
     */
    public function withLimit($limit): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource4GetRequest
     */
    public function withOffset($offset): Resource4GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource4PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/carts';
}
final class Resource5 extends Resource {
    const API_PATH='/{projectKey}/carts/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource5GetRequest
     */
    public function get($query = null, array $options = []): Resource5GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource5GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource5PostRequest
     */
    public function post($body = null, array $options = []): Resource5PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource5PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource5DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource5DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource5DeleteRequest::class);
    }
}
final class Resource5GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/carts/{ID}';
}
final class Resource5PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/carts/{ID}';
}
final class Resource5DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/carts/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource5DeleteRequest
     */
    public function withVersion($version): Resource5DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource6 extends Resource {
    const API_PATH='/{projectKey}/cart-discounts';

    /**
     * @param $query
     * @param array $options
     * @return Resource6GetRequest
     */
    public function get($query = null, array $options = []): Resource6GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource6GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource6PostRequest
     */
    public function post($body = null, array $options = []): Resource6PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource6PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource7
     */
    public function withId($ID): Resource7 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource7($uri);
    }
}
final class Resource6GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/cart-discounts';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource6GetRequest
     */
    public function withWhere($where): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource6GetRequest
     */
    public function withSort($sort): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource6GetRequest
     */
    public function withLimit($limit): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource6GetRequest
     */
    public function withOffset($offset): Resource6GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource6PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/cart-discounts';
}
final class Resource7 extends Resource {
    const API_PATH='/{projectKey}/cart-discounts/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource7GetRequest
     */
    public function get($query = null, array $options = []): Resource7GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource7GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource7PostRequest
     */
    public function post($body = null, array $options = []): Resource7PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource7PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource7DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource7DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource7DeleteRequest::class);
    }
}
final class Resource7GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/cart-discounts/{ID}';
}
final class Resource7PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/cart-discounts/{ID}';
}
final class Resource7DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/cart-discounts/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource7DeleteRequest
     */
    public function withVersion($version): Resource7DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource8 extends Resource {
    const API_PATH='/{projectKey}/channels';

    /**
     * @param $query
     * @param array $options
     * @return Resource8GetRequest
     */
    public function get($query = null, array $options = []): Resource8GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource8GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource8PostRequest
     */
    public function post($body = null, array $options = []): Resource8PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource8PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource9
     */
    public function withId($ID): Resource9 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource9($uri);
    }
}
final class Resource8GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/channels';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource8GetRequest
     */
    public function withWhere($where): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource8GetRequest
     */
    public function withSort($sort): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource8GetRequest
     */
    public function withLimit($limit): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource8GetRequest
     */
    public function withOffset($offset): Resource8GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource8PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/channels';
}
final class Resource9 extends Resource {
    const API_PATH='/{projectKey}/channels/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource9GetRequest
     */
    public function get($query = null, array $options = []): Resource9GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource9GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource9PostRequest
     */
    public function post($body = null, array $options = []): Resource9PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource9PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource9DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource9DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource9DeleteRequest::class);
    }
}
final class Resource9GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/channels/{ID}';
}
final class Resource9PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/channels/{ID}';
}
final class Resource9DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/channels/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource9DeleteRequest
     */
    public function withVersion($version): Resource9DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource10 extends Resource {
    const API_PATH='/{projectKey}/customers';

    /**
     * @return Resource12
     */
    public function emailToken(): Resource12 {
        return new Resource12($this->getUri() . '/email-token');
    }

    /**
     * @return Resource13
     */
    public function email(): Resource13 {
        return new Resource13($this->getUri() . '/email');
    }

    /**
     * @return Resource15
     */
    public function password(): Resource15 {
        return new Resource15($this->getUri() . '/password');
    }

    /**
     * @return Resource16
     */
    public function passwordToken(): Resource16 {
        return new Resource16($this->getUri() . '/password-token');
    }

    /**
     * @param $query
     * @param array $options
     * @return Resource10GetRequest
     */
    public function get($query = null, array $options = []): Resource10GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource10GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource10PostRequest
     */
    public function post($body = null, array $options = []): Resource10PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource10PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource11
     */
    public function withId($ID): Resource11 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource11($uri);
    }
}
final class Resource10GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/customers';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource10GetRequest
     */
    public function withWhere($where): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource10GetRequest
     */
    public function withSort($sort): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource10GetRequest
     */
    public function withLimit($limit): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource10GetRequest
     */
    public function withOffset($offset): Resource10GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource10PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customers';
}
final class Resource11 extends Resource {
    const API_PATH='/{projectKey}/customers/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource11GetRequest
     */
    public function get($query = null, array $options = []): Resource11GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource11GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource11PostRequest
     */
    public function post($body = null, array $options = []): Resource11PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource11PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource11DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource11DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource11DeleteRequest::class);
    }
}
final class Resource11GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/customers/{ID}';
}
final class Resource11PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customers/{ID}';
}
final class Resource11DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/customers/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource11DeleteRequest
     */
    public function withVersion($version): Resource11DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource12 extends Resource {
    const API_PATH='/{projectKey}/customers/email-token';

    /**
     * @param $body
     * @param array $options
     * @return Resource12PostRequest
     */
    public function post($body = null, array $options = []): Resource12PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource12PostRequest::class);
    }
}
final class Resource12PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customers/email-token';
}
final class Resource13 extends Resource {
    const API_PATH='/{projectKey}/customers/email';

    /**
     * @return Resource14
     */
    public function confirm(): Resource14 {
        return new Resource14($this->getUri() . '/confirm');
    }
}
final class Resource14 extends Resource {
    const API_PATH='/{projectKey}/customers/email/confirm';

    /**
     * @param $body
     * @param array $options
     * @return Resource14PostRequest
     */
    public function post($body = null, array $options = []): Resource14PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource14PostRequest::class);
    }
}
final class Resource14PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customers/email/confirm';
}
final class Resource15 extends Resource {
    const API_PATH='/{projectKey}/customers/password';

    /**
     * @return Resource17
     */
    public function reset(): Resource17 {
        return new Resource17($this->getUri() . '/reset');
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource15PostRequest
     */
    public function post($body = null, array $options = []): Resource15PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource15PostRequest::class);
    }
}
final class Resource15PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customers/password';
}
final class Resource17 extends Resource {
    const API_PATH='/{projectKey}/customers/password/reset';

    /**
     * @param $body
     * @param array $options
     * @return Resource17PostRequest
     */
    public function post($body = null, array $options = []): Resource17PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource17PostRequest::class);
    }
}
final class Resource17PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customers/password/reset';
}
final class Resource16 extends Resource {
    const API_PATH='/{projectKey}/customers/password-token';

    /**
     * @param $body
     * @param array $options
     * @return Resource16PostRequest
     */
    public function post($body = null, array $options = []): Resource16PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource16PostRequest::class);
    }
}
final class Resource16PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customers/password-token';
}
final class Resource18 extends Resource {
    const API_PATH='/{projectKey}/customer-groups';

    /**
     * @param $query
     * @param array $options
     * @return Resource18GetRequest
     */
    public function get($query = null, array $options = []): Resource18GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource18GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource18PostRequest
     */
    public function post($body = null, array $options = []): Resource18PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource18PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource19
     */
    public function withId($ID): Resource19 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource19($uri);
    }
}
final class Resource18GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/customer-groups';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource18GetRequest
     */
    public function withWhere($where): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource18GetRequest
     */
    public function withSort($sort): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource18GetRequest
     */
    public function withLimit($limit): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource18GetRequest
     */
    public function withOffset($offset): Resource18GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource18PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customer-groups';
}
final class Resource19 extends Resource {
    const API_PATH='/{projectKey}/customer-groups/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource19GetRequest
     */
    public function get($query = null, array $options = []): Resource19GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource19GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource19PostRequest
     */
    public function post($body = null, array $options = []): Resource19PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource19PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource19DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource19DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource19DeleteRequest::class);
    }
}
final class Resource19GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/customer-groups/{ID}';
}
final class Resource19PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/customer-groups/{ID}';
}
final class Resource19DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/customer-groups/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource19DeleteRequest
     */
    public function withVersion($version): Resource19DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource20 extends Resource {
    const API_PATH='/{projectKey}/custom-objects';

    /**
     * @param $query
     * @param array $options
     * @return Resource20GetRequest
     */
    public function get($query = null, array $options = []): Resource20GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource20GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource20PostRequest
     */
    public function post($body = null, array $options = []): Resource20PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource20PostRequest::class);
    }

    /**
     * @param $container
     * @return Resource21
     */
    public function withContainer($container): Resource21 {
      
        $uri = $this->template($this->getUri() . '/{container}', ['container' => $container]);
        return new Resource21($uri);
    }

    /**
     * @param $ID
     * @return Resource23
     */
    public function withId($ID): Resource23 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource23($uri);
    }
}
final class Resource20GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/custom-objects';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource20GetRequest
     */
    public function withWhere($where): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource20GetRequest
     */
    public function withSort($sort): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource20GetRequest
     */
    public function withLimit($limit): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource20GetRequest
     */
    public function withOffset($offset): Resource20GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource20PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/custom-objects';
}
final class Resource21 extends Resource {
    const API_PATH='/{projectKey}/custom-objects/{container}';

    /**
     * @param $key
     * @return Resource22
     */
    public function withKey($key): Resource22 {
      
        $uri = $this->template($this->getUri() . '/{key}', ['key' => $key]);
        return new Resource22($uri);
    }
}
final class Resource22 extends Resource {
    const API_PATH='/{projectKey}/custom-objects/{container}/{key}';

    /**
     * @param $query
     * @param array $options
     * @return Resource22GetRequest
     */
    public function get($query = null, array $options = []): Resource22GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource22GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource22DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource22DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource22DeleteRequest::class);
    }
}
final class Resource22GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/custom-objects/{container}/{key}';
}
final class Resource22DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/custom-objects/{container}/{key}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource22DeleteRequest
     */
    public function withVersion($version): Resource22DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource23 extends Resource {
    const API_PATH='/{projectKey}/custom-objects/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource23GetRequest
     */
    public function get($query = null, array $options = []): Resource23GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource23GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource23DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource23DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource23DeleteRequest::class);
    }
}
final class Resource23GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/custom-objects/{ID}';
}
final class Resource23DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/custom-objects/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource23DeleteRequest
     */
    public function withVersion($version): Resource23DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource24 extends Resource {
    const API_PATH='/{projectKey}/discount-codes';

    /**
     * @param $query
     * @param array $options
     * @return Resource24GetRequest
     */
    public function get($query = null, array $options = []): Resource24GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource24GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource24PostRequest
     */
    public function post($body = null, array $options = []): Resource24PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource24PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource25
     */
    public function withId($ID): Resource25 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource25($uri);
    }
}
final class Resource24GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/discount-codes';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource24GetRequest
     */
    public function withWhere($where): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource24GetRequest
     */
    public function withSort($sort): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource24GetRequest
     */
    public function withLimit($limit): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource24GetRequest
     */
    public function withOffset($offset): Resource24GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource24PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/discount-codes';
}
final class Resource25 extends Resource {
    const API_PATH='/{projectKey}/discount-codes/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource25GetRequest
     */
    public function get($query = null, array $options = []): Resource25GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource25GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource25PostRequest
     */
    public function post($body = null, array $options = []): Resource25PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource25PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource25DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource25DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource25DeleteRequest::class);
    }
}
final class Resource25GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/discount-codes/{ID}';
}
final class Resource25PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/discount-codes/{ID}';
}
final class Resource25DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/discount-codes/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource25DeleteRequest
     */
    public function withVersion($version): Resource25DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource26 extends Resource {
    const API_PATH='/{projectKey}/graphql';

    /**
     * @param $body
     * @param array $options
     * @return Resource26PostRequest
     */
    public function post($body = null, array $options = []): Resource26PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource26PostRequest::class);
    }
}
final class Resource26PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/graphql';
}
final class Resource27 extends Resource {
    const API_PATH='/{projectKey}/inventory';

    /**
     * @param $query
     * @param array $options
     * @return Resource27GetRequest
     */
    public function get($query = null, array $options = []): Resource27GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource27GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource27PostRequest
     */
    public function post($body = null, array $options = []): Resource27PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource27PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource28
     */
    public function withId($ID): Resource28 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource28($uri);
    }
}
final class Resource27GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/inventory';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource27GetRequest
     */
    public function withWhere($where): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource27GetRequest
     */
    public function withSort($sort): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource27GetRequest
     */
    public function withLimit($limit): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource27GetRequest
     */
    public function withOffset($offset): Resource27GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource27PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/inventory';
}
final class Resource28 extends Resource {
    const API_PATH='/{projectKey}/inventory/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource28GetRequest
     */
    public function get($query = null, array $options = []): Resource28GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource28GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource28PostRequest
     */
    public function post($body = null, array $options = []): Resource28PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource28PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource28DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource28DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource28DeleteRequest::class);
    }
}
final class Resource28GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/inventory/{ID}';
}
final class Resource28PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/inventory/{ID}';
}
final class Resource28DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/inventory/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource28DeleteRequest
     */
    public function withVersion($version): Resource28DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource29 extends Resource {
    const API_PATH='/{projectKey}/login';

    /**
     * @param $body
     * @param array $options
     * @return Resource29PostRequest
     */
    public function post($body = null, array $options = []): Resource29PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource29PostRequest::class);
    }
}
final class Resource29PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/login';
}
final class Resource30 extends Resource {
    const API_PATH='/{projectKey}/messages';

    /**
     * @param $query
     * @param array $options
     * @return Resource30GetRequest
     */
    public function get($query = null, array $options = []): Resource30GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource30GetRequest::class);
    }

    /**
     * @param $ID
     * @return Resource31
     */
    public function withId($ID): Resource31 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource31($uri);
    }
}
final class Resource30GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/messages';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource30GetRequest
     */
    public function withWhere($where): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource30GetRequest
     */
    public function withSort($sort): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource30GetRequest
     */
    public function withLimit($limit): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource30GetRequest
     */
    public function withOffset($offset): Resource30GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource31 extends Resource {
    const API_PATH='/{projectKey}/messages/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource31GetRequest
     */
    public function get($query = null, array $options = []): Resource31GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource31GetRequest::class);
    }
}
final class Resource31GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/messages/{ID}';
}
final class Resource32 extends Resource {
    const API_PATH='/{projectKey}/orders';

    /**
     * @return Resource34
     */
    public function import(): Resource34 {
        return new Resource34($this->getUri() . '/import');
    }

    /**
     * @param $query
     * @param array $options
     * @return Resource32GetRequest
     */
    public function get($query = null, array $options = []): Resource32GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource32GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource32PostRequest
     */
    public function post($body = null, array $options = []): Resource32PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource32PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource33
     */
    public function withId($ID): Resource33 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource33($uri);
    }
}
final class Resource32GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/orders';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource32GetRequest
     */
    public function withWhere($where): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource32GetRequest
     */
    public function withSort($sort): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource32GetRequest
     */
    public function withLimit($limit): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource32GetRequest
     */
    public function withOffset($offset): Resource32GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource32PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/orders';
}
final class Resource33 extends Resource {
    const API_PATH='/{projectKey}/orders/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource33GetRequest
     */
    public function get($query = null, array $options = []): Resource33GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource33GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource33PostRequest
     */
    public function post($body = null, array $options = []): Resource33PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource33PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource33DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource33DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource33DeleteRequest::class);
    }
}
final class Resource33GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/orders/{ID}';
}
final class Resource33PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/orders/{ID}';
}
final class Resource33DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/orders/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource33DeleteRequest
     */
    public function withVersion($version): Resource33DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource34 extends Resource {
    const API_PATH='/{projectKey}/orders/import';

    /**
     * @param $body
     * @param array $options
     * @return Resource34PostRequest
     */
    public function post($body = null, array $options = []): Resource34PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource34PostRequest::class);
    }
}
final class Resource34PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/orders/import';
}
final class Resource35 extends Resource {
    const API_PATH='/{projectKey}/payments';

    /**
     * @param $query
     * @param array $options
     * @return Resource35GetRequest
     */
    public function get($query = null, array $options = []): Resource35GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource35GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource35PostRequest
     */
    public function post($body = null, array $options = []): Resource35PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource35PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource36
     */
    public function withId($ID): Resource36 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource36($uri);
    }
}
final class Resource35GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/payments';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource35GetRequest
     */
    public function withWhere($where): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource35GetRequest
     */
    public function withSort($sort): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource35GetRequest
     */
    public function withLimit($limit): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource35GetRequest
     */
    public function withOffset($offset): Resource35GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource35PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/payments';
}
final class Resource36 extends Resource {
    const API_PATH='/{projectKey}/payments/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource36GetRequest
     */
    public function get($query = null, array $options = []): Resource36GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource36GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource36PostRequest
     */
    public function post($body = null, array $options = []): Resource36PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource36PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource36DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource36DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource36DeleteRequest::class);
    }
}
final class Resource36GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/payments/{ID}';
}
final class Resource36PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/payments/{ID}';
}
final class Resource36DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/payments/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource36DeleteRequest
     */
    public function withVersion($version): Resource36DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource37 extends Resource {
    const API_PATH='/{projectKey}/products';

    /**
     * @param $query
     * @param array $options
     * @return Resource37GetRequest
     */
    public function get($query = null, array $options = []): Resource37GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource37GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource37PostRequest
     */
    public function post($body = null, array $options = []): Resource37PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource37PostRequest::class);
    }

    /**
     * @param $key
     * @return Resource38
     */
    public function withKey($key): Resource38 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource38($uri);
    }

    /**
     * @param $ID
     * @return Resource39
     */
    public function withId($ID): Resource39 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource39($uri);
    }
}
final class Resource37GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/products';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource37GetRequest
     */
    public function withWhere($where): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource37GetRequest
     */
    public function withSort($sort): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource37GetRequest
     */
    public function withLimit($limit): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource37GetRequest
     */
    public function withOffset($offset): Resource37GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource37PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/products';
}
final class Resource38 extends Resource {
    const API_PATH='/{projectKey}/products/key={key}';

    /**
     * @param $query
     * @param array $options
     * @return Resource38GetRequest
     */
    public function get($query = null, array $options = []): Resource38GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource38GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource38PostRequest
     */
    public function post($body = null, array $options = []): Resource38PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource38PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource38DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource38DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource38DeleteRequest::class);
    }
}
final class Resource38GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/products/key={key}';
}
final class Resource38PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/products/key={key}';
}
final class Resource38DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/products/key={key}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource38DeleteRequest
     */
    public function withVersion($version): Resource38DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource39 extends Resource {
    const API_PATH='/{projectKey}/products/{ID}';

    /**
     * @return Resource40
     */
    public function images(): Resource40 {
        return new Resource40($this->getUri() . '/images');
    }

    /**
     * @param $query
     * @param array $options
     * @return Resource39GetRequest
     */
    public function get($query = null, array $options = []): Resource39GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource39GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource39PostRequest
     */
    public function post($body = null, array $options = []): Resource39PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource39PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource39DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource39DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource39DeleteRequest::class);
    }
}
final class Resource39GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/products/{ID}';
}
final class Resource39PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/products/{ID}';
}
final class Resource39DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/products/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource39DeleteRequest
     */
    public function withVersion($version): Resource39DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource40 extends Resource {
    const API_PATH='/{projectKey}/products/{ID}/images';

    /**
     * @param $body
     * @param array $options
     * @return Resource40PostRequest
     */
    public function post($body = null, array $options = []): Resource40PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource40PostRequest::class);
    }
}
final class Resource40PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/products/{ID}/images';
}
final class Resource41 extends Resource {
    const API_PATH='/{projectKey}/product-discounts';

    /**
     * @param $query
     * @param array $options
     * @return Resource41GetRequest
     */
    public function get($query = null, array $options = []): Resource41GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource41GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource41PostRequest
     */
    public function post($body = null, array $options = []): Resource41PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource41PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource42
     */
    public function withId($ID): Resource42 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource42($uri);
    }
}
final class Resource41GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-discounts';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource41GetRequest
     */
    public function withWhere($where): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource41GetRequest
     */
    public function withSort($sort): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource41GetRequest
     */
    public function withLimit($limit): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource41GetRequest
     */
    public function withOffset($offset): Resource41GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource41PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/product-discounts';
}
final class Resource42 extends Resource {
    const API_PATH='/{projectKey}/product-discounts/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource42GetRequest
     */
    public function get($query = null, array $options = []): Resource42GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource42GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource42PostRequest
     */
    public function post($body = null, array $options = []): Resource42PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource42PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource42DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource42DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource42DeleteRequest::class);
    }
}
final class Resource42GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-discounts/{ID}';
}
final class Resource42PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/product-discounts/{ID}';
}
final class Resource42DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/product-discounts/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource42DeleteRequest
     */
    public function withVersion($version): Resource42DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource43 extends Resource {
    const API_PATH='/{projectKey}/product-projections';

    /**
     * @return Resource46
     */
    public function search(): Resource46 {
        return new Resource46($this->getUri() . '/search');
    }

    /**
     * @return Resource47
     */
    public function suggest(): Resource47 {
        return new Resource47($this->getUri() . '/suggest');
    }

    /**
     * @param $query
     * @param array $options
     * @return Resource43GetRequest
     */
    public function get($query = null, array $options = []): Resource43GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource43GetRequest::class);
    }

    /**
     * @param $key
     * @return Resource44
     */
    public function withKey($key): Resource44 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource44($uri);
    }

    /**
     * @param $ID
     * @return Resource45
     */
    public function withId($ID): Resource45 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource45($uri);
    }
}
final class Resource43GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-projections';

    private $query;
    private $queryParts;

    /**
     * @param $staged
     * @return Resource43GetRequest
     */
    public function withStaged($staged): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $where
     * @return Resource43GetRequest
     */
    public function withWhere($where): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource43GetRequest
     */
    public function withSort($sort): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource43GetRequest
     */
    public function withLimit($limit): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource43GetRequest
     */
    public function withOffset($offset): Resource43GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource44 extends Resource {
    const API_PATH='/{projectKey}/product-projections/key={key}';

    /**
     * @param $query
     * @param array $options
     * @return Resource44GetRequest
     */
    public function get($query = null, array $options = []): Resource44GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource44GetRequest::class);
    }
}
final class Resource44GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-projections/key={key}';

    private $query;
    private $queryParts;

    /**
     * @param $staged
     * @return Resource44GetRequest
     */
    public function withStaged($staged): Resource44GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource45 extends Resource {
    const API_PATH='/{projectKey}/product-projections/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource45GetRequest
     */
    public function get($query = null, array $options = []): Resource45GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource45GetRequest::class);
    }
}
final class Resource45GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-projections/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $staged
     * @return Resource45GetRequest
     */
    public function withStaged($staged): Resource45GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource46 extends Resource {
    const API_PATH='/{projectKey}/product-projections/search';

    /**
     * @param $body
     * @param array $options
     * @return Resource46PostRequest
     */
    public function post($body = null, array $options = []): Resource46PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource46PostRequest::class);
    }

    /**
     * @param $query
     * @param array $options
     * @return Resource46GetRequest
     */
    public function get($query = null, array $options = []): Resource46GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource46GetRequest::class);
    }
}
final class Resource46PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/product-projections/search';
}
final class Resource46GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-projections/search';

    private $query;
    private $queryParts;

    /**
     * @param $fuzzy
     * @return Resource46GetRequest
     */
    public function withFuzzy($fuzzy): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'fuzzy';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $fuzzy;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $fuzzyLevel
     * @return Resource46GetRequest
     */
    public function withFuzzyLevel($fuzzyLevel): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'fuzzyLevel';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $fuzzyLevel;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $staged
     * @return Resource46GetRequest
     */
    public function withStaged($staged): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $filter
     * @return Resource46GetRequest
     */
    public function withFilter($filter): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'filter';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $filter;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $filterFacets
     * @return Resource46GetRequest
     */
    public function withFilterFacets($filterFacets): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'filter.facets';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $filterFacets;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $filterQuery
     * @return Resource46GetRequest
     */
    public function withFilterQuery($filterQuery): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'filter.query';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $filterQuery;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $facet
     * @return Resource46GetRequest
     */
    public function withFacet($facet): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'facet';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $facet;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $priceCurrency
     * @return Resource46GetRequest
     */
    public function withPriceCurrency($priceCurrency): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceCurrency';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceCurrency;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $priceCountry
     * @return Resource46GetRequest
     */
    public function withPriceCountry($priceCountry): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceCountry';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceCountry;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $priceCustomerGroup
     * @return Resource46GetRequest
     */
    public function withPriceCustomerGroup($priceCustomerGroup): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceCustomerGroup';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceCustomerGroup;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $priceChannel
     * @return Resource46GetRequest
     */
    public function withPriceChannel($priceChannel): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'priceChannel';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $priceChannel;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $locale
     * @param $textLocale
     * @return Resource46GetRequest
     */
    public function withTextLocale($locale, $textLocale): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = preg_replace(['/<<locale>>/'], [$locale], 'text.<<locale>>');
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $textLocale;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource46GetRequest
     */
    public function withSort($sort): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource46GetRequest
     */
    public function withLimit($limit): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource46GetRequest
     */
    public function withOffset($offset): Resource46GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource47 extends Resource {
    const API_PATH='/{projectKey}/product-projections/suggest';

    /**
     * @param $query
     * @param array $options
     * @return Resource47GetRequest
     */
    public function get($query = null, array $options = []): Resource47GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource47GetRequest::class);
    }
}
final class Resource47GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-projections/suggest';

    private $query;
    private $queryParts;

    /**
     * @param $fuzzy
     * @return Resource47GetRequest
     */
    public function withFuzzy($fuzzy): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'fuzzy';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $fuzzy;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $staged
     * @return Resource47GetRequest
     */
    public function withStaged($staged): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'staged';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $staged;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $locale
     * @param $searchKeywordsLocale
     * @return Resource47GetRequest
     */
    public function withSearchKeywordsLocale($locale, $searchKeywordsLocale): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = preg_replace(['/<<locale>>/'], [$locale], 'searchKeywords.<<locale>>');
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $searchKeywordsLocale;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource47GetRequest
     */
    public function withSort($sort): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource47GetRequest
     */
    public function withLimit($limit): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource47GetRequest
     */
    public function withOffset($offset): Resource47GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource48 extends Resource {
    const API_PATH='/{projectKey}/product-types';

    /**
     * @param $query
     * @param array $options
     * @return Resource48GetRequest
     */
    public function get($query = null, array $options = []): Resource48GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource48GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource48PostRequest
     */
    public function post($body = null, array $options = []): Resource48PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource48PostRequest::class);
    }

    /**
     * @param $key
     * @return Resource49
     */
    public function withKey($key): Resource49 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource49($uri);
    }

    /**
     * @param $ID
     * @return Resource50
     */
    public function withId($ID): Resource50 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource50($uri);
    }
}
final class Resource48GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-types';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource48GetRequest
     */
    public function withWhere($where): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource48GetRequest
     */
    public function withSort($sort): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource48GetRequest
     */
    public function withLimit($limit): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource48GetRequest
     */
    public function withOffset($offset): Resource48GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource48PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/product-types';
}
final class Resource49 extends Resource {
    const API_PATH='/{projectKey}/product-types/key={key}';

    /**
     * @param $query
     * @param array $options
     * @return Resource49GetRequest
     */
    public function get($query = null, array $options = []): Resource49GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource49GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource49PostRequest
     */
    public function post($body = null, array $options = []): Resource49PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource49PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource49DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource49DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource49DeleteRequest::class);
    }
}
final class Resource49GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-types/key={key}';
}
final class Resource49PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/product-types/key={key}';
}
final class Resource49DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/product-types/key={key}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource49DeleteRequest
     */
    public function withVersion($version): Resource49DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource50 extends Resource {
    const API_PATH='/{projectKey}/product-types/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource50GetRequest
     */
    public function get($query = null, array $options = []): Resource50GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource50GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource50PostRequest
     */
    public function post($body = null, array $options = []): Resource50PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource50PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource50DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource50DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource50DeleteRequest::class);
    }
}
final class Resource50GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/product-types/{ID}';
}
final class Resource50PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/product-types/{ID}';
}
final class Resource50DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/product-types/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource50DeleteRequest
     */
    public function withVersion($version): Resource50DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource51 extends Resource {
    const API_PATH='/{projectKey}/reviews';

    /**
     * @param $query
     * @param array $options
     * @return Resource51GetRequest
     */
    public function get($query = null, array $options = []): Resource51GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource51GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource51PostRequest
     */
    public function post($body = null, array $options = []): Resource51PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource51PostRequest::class);
    }

    /**
     * @param $key
     * @return Resource52
     */
    public function withKey($key): Resource52 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource52($uri);
    }

    /**
     * @param $ID
     * @return Resource53
     */
    public function withId($ID): Resource53 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource53($uri);
    }
}
final class Resource51GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/reviews';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource51GetRequest
     */
    public function withWhere($where): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource51GetRequest
     */
    public function withSort($sort): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource51GetRequest
     */
    public function withLimit($limit): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource51GetRequest
     */
    public function withOffset($offset): Resource51GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource51PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/reviews';
}
final class Resource52 extends Resource {
    const API_PATH='/{projectKey}/reviews/key={key}';

    /**
     * @param $query
     * @param array $options
     * @return Resource52GetRequest
     */
    public function get($query = null, array $options = []): Resource52GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource52GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource52PostRequest
     */
    public function post($body = null, array $options = []): Resource52PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource52PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource52DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource52DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource52DeleteRequest::class);
    }
}
final class Resource52GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/reviews/key={key}';
}
final class Resource52PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/reviews/key={key}';
}
final class Resource52DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/reviews/key={key}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource52DeleteRequest
     */
    public function withVersion($version): Resource52DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource53 extends Resource {
    const API_PATH='/{projectKey}/reviews/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource53GetRequest
     */
    public function get($query = null, array $options = []): Resource53GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource53GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource53PostRequest
     */
    public function post($body = null, array $options = []): Resource53PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource53PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource53DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource53DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource53DeleteRequest::class);
    }
}
final class Resource53GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/reviews/{ID}';
}
final class Resource53PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/reviews/{ID}';
}
final class Resource53DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/reviews/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource53DeleteRequest
     */
    public function withVersion($version): Resource53DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource54 extends Resource {
    const API_PATH='/{projectKey}/shipping-methods';

    /**
     * @param $query
     * @param array $options
     * @return Resource54GetRequest
     */
    public function get($query = null, array $options = []): Resource54GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource54GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource54PostRequest
     */
    public function post($body = null, array $options = []): Resource54PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource54PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource55
     */
    public function withId($ID): Resource55 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource55($uri);
    }
}
final class Resource54GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/shipping-methods';

    private $query;
    private $queryParts;

    /**
     * @param $cartId
     * @return Resource54GetRequest
     */
    public function withCartId($cartId): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'cartId';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $cartId;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $country
     * @return Resource54GetRequest
     */
    public function withCountry($country): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'country';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $country;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $state
     * @return Resource54GetRequest
     */
    public function withState($state): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'state';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $state;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $currency
     * @return Resource54GetRequest
     */
    public function withCurrency($currency): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'currency';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $currency;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $where
     * @return Resource54GetRequest
     */
    public function withWhere($where): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource54GetRequest
     */
    public function withSort($sort): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource54GetRequest
     */
    public function withLimit($limit): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource54GetRequest
     */
    public function withOffset($offset): Resource54GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource54PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/shipping-methods';
}
final class Resource55 extends Resource {
    const API_PATH='/{projectKey}/shipping-methods/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource55GetRequest
     */
    public function get($query = null, array $options = []): Resource55GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource55GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource55PostRequest
     */
    public function post($body = null, array $options = []): Resource55PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource55PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource55DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource55DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource55DeleteRequest::class);
    }
}
final class Resource55GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/shipping-methods/{ID}';
}
final class Resource55PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/shipping-methods/{ID}';
}
final class Resource55DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/shipping-methods/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource55DeleteRequest
     */
    public function withVersion($version): Resource55DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource56 extends Resource {
    const API_PATH='/{projectKey}/states';

    /**
     * @param $query
     * @param array $options
     * @return Resource56GetRequest
     */
    public function get($query = null, array $options = []): Resource56GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource56GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource56PostRequest
     */
    public function post($body = null, array $options = []): Resource56PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource56PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource57
     */
    public function withId($ID): Resource57 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource57($uri);
    }
}
final class Resource56GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/states';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource56GetRequest
     */
    public function withWhere($where): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource56GetRequest
     */
    public function withSort($sort): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource56GetRequest
     */
    public function withLimit($limit): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource56GetRequest
     */
    public function withOffset($offset): Resource56GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource56PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/states';
}
final class Resource57 extends Resource {
    const API_PATH='/{projectKey}/states/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource57GetRequest
     */
    public function get($query = null, array $options = []): Resource57GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource57GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource57PostRequest
     */
    public function post($body = null, array $options = []): Resource57PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource57PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource57DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource57DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource57DeleteRequest::class);
    }
}
final class Resource57GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/states/{ID}';
}
final class Resource57PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/states/{ID}';
}
final class Resource57DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/states/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource57DeleteRequest
     */
    public function withVersion($version): Resource57DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource58 extends Resource {
    const API_PATH='/{projectKey}/subscriptions';

    /**
     * @param $query
     * @param array $options
     * @return Resource58GetRequest
     */
    public function get($query = null, array $options = []): Resource58GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource58GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource58PostRequest
     */
    public function post($body = null, array $options = []): Resource58PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource58PostRequest::class);
    }

    /**
     * @param $key
     * @return Resource59
     */
    public function withKey($key): Resource59 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource59($uri);
    }

    /**
     * @param $ID
     * @return Resource60
     */
    public function withId($ID): Resource60 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource60($uri);
    }
}
final class Resource58GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/subscriptions';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource58GetRequest
     */
    public function withWhere($where): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource58GetRequest
     */
    public function withSort($sort): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource58GetRequest
     */
    public function withLimit($limit): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource58GetRequest
     */
    public function withOffset($offset): Resource58GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource58PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/subscriptions';
}
final class Resource59 extends Resource {
    const API_PATH='/{projectKey}/subscriptions/key={key}';

    /**
     * @param $query
     * @param array $options
     * @return Resource59GetRequest
     */
    public function get($query = null, array $options = []): Resource59GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource59GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource59PostRequest
     */
    public function post($body = null, array $options = []): Resource59PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource59PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource59DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource59DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource59DeleteRequest::class);
    }
}
final class Resource59GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/subscriptions/key={key}';
}
final class Resource59PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/subscriptions/key={key}';
}
final class Resource59DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/subscriptions/key={key}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource59DeleteRequest
     */
    public function withVersion($version): Resource59DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource60 extends Resource {
    const API_PATH='/{projectKey}/subscriptions/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource60GetRequest
     */
    public function get($query = null, array $options = []): Resource60GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource60GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource60PostRequest
     */
    public function post($body = null, array $options = []): Resource60PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource60PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource60DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource60DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource60DeleteRequest::class);
    }
}
final class Resource60GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/subscriptions/{ID}';
}
final class Resource60PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/subscriptions/{ID}';
}
final class Resource60DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/subscriptions/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource60DeleteRequest
     */
    public function withVersion($version): Resource60DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource61 extends Resource {
    const API_PATH='/{projectKey}/tax-categories';

    /**
     * @param $query
     * @param array $options
     * @return Resource61GetRequest
     */
    public function get($query = null, array $options = []): Resource61GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource61GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource61PostRequest
     */
    public function post($body = null, array $options = []): Resource61PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource61PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource62
     */
    public function withId($ID): Resource62 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource62($uri);
    }
}
final class Resource61GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/tax-categories';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource61GetRequest
     */
    public function withWhere($where): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource61GetRequest
     */
    public function withSort($sort): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource61GetRequest
     */
    public function withLimit($limit): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource61GetRequest
     */
    public function withOffset($offset): Resource61GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource61PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/tax-categories';
}
final class Resource62 extends Resource {
    const API_PATH='/{projectKey}/tax-categories/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource62GetRequest
     */
    public function get($query = null, array $options = []): Resource62GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource62GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource62PostRequest
     */
    public function post($body = null, array $options = []): Resource62PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource62PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource62DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource62DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource62DeleteRequest::class);
    }
}
final class Resource62GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/tax-categories/{ID}';
}
final class Resource62PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/tax-categories/{ID}';
}
final class Resource62DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/tax-categories/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource62DeleteRequest
     */
    public function withVersion($version): Resource62DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource63 extends Resource {
    const API_PATH='/{projectKey}/types';

    /**
     * @param $query
     * @param array $options
     * @return Resource63GetRequest
     */
    public function get($query = null, array $options = []): Resource63GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource63GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource63PostRequest
     */
    public function post($body = null, array $options = []): Resource63PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource63PostRequest::class);
    }

    /**
     * @param $key
     * @return Resource64
     */
    public function withKey($key): Resource64 {
      
        $uri = $this->template($this->getUri() . '/key={key}', ['key' => $key]);
        return new Resource64($uri);
    }

    /**
     * @param $ID
     * @return Resource65
     */
    public function withId($ID): Resource65 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource65($uri);
    }
}
final class Resource63GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/types';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource63GetRequest
     */
    public function withWhere($where): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource63GetRequest
     */
    public function withSort($sort): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource63GetRequest
     */
    public function withLimit($limit): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource63GetRequest
     */
    public function withOffset($offset): Resource63GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource63PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/types';
}
final class Resource64 extends Resource {
    const API_PATH='/{projectKey}/types/key={key}';

    /**
     * @param $query
     * @param array $options
     * @return Resource64GetRequest
     */
    public function get($query = null, array $options = []): Resource64GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource64GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource64PostRequest
     */
    public function post($body = null, array $options = []): Resource64PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource64PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource64DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource64DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource64DeleteRequest::class);
    }
}
final class Resource64GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/types/key={key}';
}
final class Resource64PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/types/key={key}';
}
final class Resource64DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/types/key={key}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource64DeleteRequest
     */
    public function withVersion($version): Resource64DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource65 extends Resource {
    const API_PATH='/{projectKey}/types/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource65GetRequest
     */
    public function get($query = null, array $options = []): Resource65GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource65GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource65PostRequest
     */
    public function post($body = null, array $options = []): Resource65PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource65PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource65DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource65DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource65DeleteRequest::class);
    }
}
final class Resource65GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/types/{ID}';
}
final class Resource65PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/types/{ID}';
}
final class Resource65DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/types/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource65DeleteRequest
     */
    public function withVersion($version): Resource65DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource66 extends Resource {
    const API_PATH='/{projectKey}/zones';

    /**
     * @param $query
     * @param array $options
     * @return Resource66GetRequest
     */
    public function get($query = null, array $options = []): Resource66GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource66GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource66PostRequest
     */
    public function post($body = null, array $options = []): Resource66PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource66PostRequest::class);
    }

    /**
     * @param $ID
     * @return Resource67
     */
    public function withId($ID): Resource67 {
      
        $uri = $this->template($this->getUri() . '/{ID}', ['ID' => $ID]);
        return new Resource67($uri);
    }
}
final class Resource66GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/zones';

    private $query;
    private $queryParts;

    /**
     * @param $where
     * @return Resource66GetRequest
     */
    public function withWhere($where): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'where';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $where;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $sort
     * @return Resource66GetRequest
     */
    public function withSort($sort): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'sort';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $sort;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $limit
     * @return Resource66GetRequest
     */
    public function withLimit($limit): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'limit';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $limit;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                

    /**
     * @param $offset
     * @return Resource66GetRequest
     */
    public function withOffset($offset): Resource66GetRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'offset';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $offset;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
final class Resource66PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/zones';
}
final class Resource67 extends Resource {
    const API_PATH='/{projectKey}/zones/{ID}';

    /**
     * @param $query
     * @param array $options
     * @return Resource67GetRequest
     */
    public function get($query = null, array $options = []): Resource67GetRequest {


        if (!is_array($query)) {
            $query = Psr7\parse_query($query);
        }
        if (isset($options['query'])) {        
            $query = array_merge($options['query'], $query);
        }
        $options['query'] = $query;
        return $this->buildRequest('get', $this->getUri(), null, $options, Resource67GetRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource67PostRequest
     */
    public function post($body = null, array $options = []): Resource67PostRequest {

        return $this->buildRequest('post', $this->getUri(), $body, $options, Resource67PostRequest::class);
    }

    /**
     * @param $body
     * @param array $options
     * @return Resource67DeleteRequest
     */
    public function delete($body = null, array $options = []): Resource67DeleteRequest {

        return $this->buildRequest('delete', $this->getUri(), $body, $options, Resource67DeleteRequest::class);
    }
}
final class Resource67GetRequest extends ApiRequest {
    const API_PATH = 'GET /{projectKey}/zones/{ID}';
}
final class Resource67PostRequest extends ApiRequest {
    const API_PATH = 'POST /{projectKey}/zones/{ID}';
}
final class Resource67DeleteRequest extends ApiRequest {
    const API_PATH = 'DELETE /{projectKey}/zones/{ID}';

    private $query;
    private $queryParts;

    /**
     * @param $version
     * @return Resource67DeleteRequest
     */
    public function withVersion($version): Resource67DeleteRequest {
        $query = $this->getUri()->getQuery();
        if ($this->query !== $query) {
            $this->queryParts = Psr7\parse_query($query);
        }
        $parameterName = 'version';
        if (isset($this->queryParts[$parameterName]) && !is_array($this->queryParts[$parameterName])) {
            $this->queryParts[$parameterName] = [$this->queryParts[$parameterName]];
        }
        $this->queryParts[$parameterName][] = $version;
        ksort($this->queryParts);
        $this->query = Psr7\build_query($this->queryParts);
        return $this->withUri($this->getUri()->withQuery($this->query));
    }
                
}
