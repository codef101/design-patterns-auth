# Laravel
### Laravel is a PHP web application framework with a syntax that is both expressive and elegant. In other words, Laravel is a free, open-source PHP web framework designed by Taylor Otwell and based on Symfony. It is meant for the building of online applications that follow the model–view–controller architectural pattern.

# Model-View-Controller
### Controllers are used to manage user requests and retrieve data in Laravel applications, which follow the Model-View-Controller design paradigm. Models for interacting with your database and retrieving information from your objects and pages are rendered using views.
## Controller
>   <!-- Default controller-->    
    namespace App\Http\Controllers;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Routing\Controller as BaseController;

    class Controller extends BaseController
    {
        use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    }

## Model
>   <!-- User Model-->
    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

    class User extends Authenticatable
    {
        use HasApiTokens, HasFactory, Notifiable;

        /**
        * The attributes that are mass assignable.
        *
        * @var array<int, string>
        */
        protected $fillable = [
            'name',
            'email',
            'password',
        ];

        /**
        * The attributes that should be hidden for serialization.
        *
        * @var array<int, string>
        */
        protected $hidden = [
            'password',
            'remember_token',
        ];

        /**
        * The attributes that should be cast.
        *
        * @var array<string, string>
        */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
    }

## View
>   <!--header view-->
    <div class="header-1">
        <a href="{{url('/')}}" class="logo"><img src="{{asset('assets/img/logo.png')}}" alt="" style="width: 25%; height: 25%;"></a>
        
  <!--search form-->
        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search books here . . . . . ." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
  <!------------------------------------------------------------------------------------>

  <!--favorite/cart/profile icon-->
        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>            

            @if(isset($layout))
                @if($layout=='profile')          
             <a title="Go To Profile" href="{{url('/profile-page')}}"><i class="fas fa-user"></i></a>
             <p id="login-btn"></p>
             @endif
            @else            
            <div id="login-btn" class="fas fa-user"></div>
            @endif
           
        </div>
    </div>
  <!------------------------------------------------------------------------------------>

  <!--nav bar-->
    <div class="header-2">
        <ul class="navbar">
            <li><i class="fa fa fa-home"></i><a href="{{url('/')}}" style="color: white">Home</a></li>
            <li><i class="fa fa-newspaper"></i><a href="{{url('/#featured')}}" style="color: white;">Featured</a></li>
            <li><i class="fa fa fa-book"></i><a href="{{url('/#arrivals')}}" style="color: white;">New Arrivals</a></li>
            <li><i class="fa fa-search"></i><a href="{{url('/#reviews')}}" style="color: white;">Reviews</a></li>
            <li><i class="fa fa-blog"></i><a href="{{url('/#blogs')}}" style="color: white;">Blogs</a></li>
            <li><i class="fab fa-stack-overflow"></i><a href="{{url('/booking')}}" style="color: white;">Books</a></li>
            <li><i class="fas fa-users"></i><a href="/#" style="color: white;">Membership</a></li>
            <li><i class="fas fa-gift"></i><a href="/#" style="color: white;">Rewards</a></li>
        </ul>
    </div>    

# Design patterns in Laravel
### On top of Model –View – Controller design pattern, other design patterns in Laravel include: _Facades Pattern_, _Strategy Pattern_, _Repository Pattern_, _Factory pattern_, _Publisher Subscriber pattern_, and _Provider Pattern_.
## Facades Pattern
### The facade design creates a unified interface for a group of subsystem interfaces. A façade is a higher-level interface for a subsystem that makes it easier to utilize.However, the façade pattern isn't just for hiding faulty code. It can be used to construct a simple public interface that connects numerous classes that are working together. Assume you're working with a huge subsystem that has hundreds of public methods, but only a few of them are required.You want the facade to construct the various classes in the subsystem correctly and supply you with those interfaces so that you can utilize them easily.
### For instance, Route facade helps to access information about the route handling the incoming request.
>   use Illuminate\Support\Facades\Route;
    $route = Route::current(); // Illuminate\Routing\Route
    $name = Route::currentRouteName(); // string
    $action = Route::currentRouteAction(); // string

## Strategy Pattern
### The strategy pattern is a type of behavior. Defines a set of algorithms that can be swapped out. It always makes use of a user interface. As a result, the implementation details are kept separate in classes. Its programs are designed to be an interface rather than an implementation.

## Repository Pattern
### In a Laravel application, the repository pattern is a link between models and controllers. The model should not be responsible for connecting to or retrieving data from the database throughout this procedure. As a result, we must use the repository to keep our code clean and secure. It cuts down on code duplication and errors.

## Factory pattern
### The Factory pattern is a creational pattern that deals with the problem of producing objects by specifying their concrete classes using factory methods. The factory, not the clients, is in charge of producing the objects. The same factory can be contacted by multiple clients.
### for instance, UserFactory found which can found in database\factories\UserFactory.php
> 
    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Str;

    class UserFactory extends Factory
    {
        /**
        * Define the model's default state.
        *
        * @return array
        */
        public function definition()
        {
            return [
                'name' => $this->faker->name(),
                'email' => $this->faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ];
        }

        /**
        * Indicate that the model's email address should be unverified.
        *
        * @return \Illuminate\Database\Eloquent\Factories\Factory
        */
        public function unverified()
        {
            return $this->state(function (array $attributes) {
                return [
                    'email_verified_at' => null,
                ];
            });
        }
    }

## Builder pattern
### The Builder pattern is one of Laravel's most important design patterns. It distinguishes between the building of a complex item and its representation, allowing the same construction process to provide several representations.

## Provider Pattern.
### The Laravel framework and the packages we use are built on the provider pattern. It's a collection of patterns for a few key services. It's similar to a plug-in or a set of packages for our service.It offers us with classes to use in our namespace.
### for instance, the route service provider; can be found in app\Providers.
> 
    namespace App\Providers;

    use Illuminate\Cache\RateLimiting\Limit;
    use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\RateLimiter;
    use Illuminate\Support\Facades\Route;

    class RouteServiceProvider extends ServiceProvider
    {
        /**
        * The path to the "home" route for your application.
        *
        * This is used by Laravel authentication to redirect users after login.
        *
        * @var string
        */
        public const HOME = '/home';

        /**
        * The controller namespace for the application.
        *
        * When present, controller route declarations will automatically be prefixed with this namespace.
        *
        * @var string|null
        */
        // protected $namespace = 'App\\Http\\Controllers';

        /**
        * Define your route model bindings, pattern filters, etc.
        *
        * @return void
        */
        public function boot()
        {
            $this->configureRateLimiting();

            $this->routes(function () {
                Route::prefix('api')
                    ->middleware('api')
                    ->namespace($this->namespace)
                    ->group(base_path('routes/api.php'));

                Route::middleware('web')
                    ->namespace($this->namespace)
                    ->group(base_path('routes/web.php'));
            });
        }

        /**
        * Configure the rate limiters for the application.
        *
        * @return void
        */
        protected function configureRateLimiting()
        {
            RateLimiter::for('api', function (Request $request) {
                return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
            });
        }
    }


# Note 
### In Model –View – Controller design pattern, Models can be found in App\Models, Views : resources\views, Controllers : App\Http\Controllers.
### Builder / Manager Pattern : you can have an implementation of this pattern at the Illuminate\Auth\AuthManager or Illuminate\Session\SessionManager
### Factory Pattern : you can have an implementation of this pattern at the Illuminate\Database\DatabaseManager or Illuminate\Validation\Factory
### Repository Pattern : you can have an implementation of this pattern at the Illuminate\Config\Repository or Illuminate\Cache\Repository
### Strategy Pattern : you can have an implementation of this pattern at the IIlluminate\Cache\StoreInterface or Illuminate\Config\LoaderInterface

# Core Concepts applied
## Routing
### Basic Routing
 > use Illuminate\Support\Facades\Route;
  
  Route::get('/', function () {
    return view('homepage');
  });
### Default Routing
>   use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\UserController;

    Route::get('/profile-page',[UserController::class,'profile'])->name('profile-page');
    Route::post('/login',[UserController::class,'validateuser']);
    Route::post('/signup',[UserController::class,'register']);
    Route::get('/logout',[UserController::class,'logout']);
## CSRF Protection
>
    <form method="POST" action="/login">
        @csrf
    
    </form>
## Request
>   namespace App\Http\Controllers;
 
    use Illuminate\Http\Request;
    
    class UserController extends Controller
    {
        /**
        * Store a new user.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
            $name = $request->input('name');
    
            //
        }
    }
## Database configuration
### This is done in .env file
> 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=users_db_laravel
    DB_USERNAME=root
    DB_PASSWORD=

## migrations : can found in database\migrations 
### migration to create user table
> 
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUsersTable extends Migration
    {
        /**
        * Run the migrations.
        *
        * @return void
        */
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('userId');
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }

        /**
        * Reverse the migrations.
        *
        * @return void
        */
        public function down()
        {
            Schema::dropIfExists('users');
        }
    }

# Security
## Laravel's Built-in Browser Authentication Services
>namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**

     * Handle an authentication attempt.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function validateuser(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum'
           ]);
      
           $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );
      
           if(Auth::attempt($user_data))
           {

            return view('profile-page');
           }
           else
           {
            return redirect('/?error=wronglogin');
           }

    }

}
 