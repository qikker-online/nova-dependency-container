<?php

namespace QikkerOnline\NovaDependencyContainer\Http\Requests;

use QikkerOnline\NovaDependencyContainer\HasDependencies;
use Laravel\Nova\Http\Requests\ActionRequest as NovaActionRequest;

class ActionRequest extends NovaActionRequest {

	use HasDependencies;
}
