# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use Commercetools\Ml\Client\MlRequestBuilder;

$root = new MlRequestBuilder();
```

## `withProjectKey("projectKey")->imageSearch()->post(null)`

Accepts an image file and returns similar products from product catalogue.


### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->imageSearch()
                ->post(null);
```
## `withProjectKey("projectKey")->missingData()->attributes()->post(null)`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->missingData()
                ->attributes()
                ->post(null);
```
## `withProjectKey("projectKey")->missingData()->attributes()->status()->withTaskId("taskId")->get()`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->missingData()
                ->attributes()
                ->status()
                ->withTaskId("taskId")
                ->get();
```
## `withProjectKey("projectKey")->missingData()->images()->post(null)`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->missingData()
                ->images()
                ->post(null);
```
## `withProjectKey("projectKey")->missingData()->images()->status()->withTaskId("taskId")->get()`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->missingData()
                ->images()
                ->status()
                ->withTaskId("taskId")
                ->get();
```
## `withProjectKey("projectKey")->missingData()->prices()->post(null)`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->missingData()
                ->prices()
                ->post(null);
```
## `withProjectKey("projectKey")->missingData()->prices()->status()->withTaskId("taskId")->get()`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->missingData()
                ->prices()
                ->status()
                ->withTaskId("taskId")
                ->get();
```
## `withProjectKey("projectKey")->recommendations()->generalCategories()->get()`

This endpoint takes arbitrary product names or image URLs and generates recommendations from a general set of categories, which cover a broad range of industries. The full list of supported categories can be found [here](https://docs.commercetools.com/category_recommendations_supported_categories.txt). These are independent of the categories that are actually defined in your project. The main  purpose of this API is to provide a quick way to test the behavior of the category recommendations engine for different names and images. In contrast to the [project-specific endpoint](https://docs.commercetools.com/http-api-projects-categoryrecommendations#project-specific-category-recommendations), this endpoint does not have [activation criteria](https://docs.commercetools.com/http-api-projects-categoryrecommendations#activating-the-api) and is enabled for all projects.


### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->recommendations()
                ->generalCategories()
                ->get();
```
## `withProjectKey("projectKey")->recommendations()->projectCategories()->withProductId("productId")->get()`

Response Representation: PagedQueryResult with a results array of ProjectCategoryrecommendation, sorted by confidence scores in descending order and the meta information of ProjectCategoryrecommendationMeta.


### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->recommendations()
                ->projectCategories()
                ->withProductId("productId")
                ->get();
```
## `withProjectKey("projectKey")->similarities()->products()->post(null)`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->similarities()
                ->products()
                ->post(null);
```
## `withProjectKey("projectKey")->similarities()->products()->status()->withTaskId("taskId")->get()`

null

### Example
```php
use Commercetools\Ml\Client\MlRequestBuilder;

$builder =  new MlRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->similarities()
                ->products()
                ->status()
                ->withTaskId("taskId")
                ->get();
```
