Laravel is a PHP web application framework with a syntax that is both expressive and elegant. In other words, Laravel is a free, open-source PHP web framework designed by Taylor Otwell and based on Symfony. It is meant for the building of online applications that follow the model–view–controller architectural pattern.
Controllers are used to manage user requests and retrieve data in Laravel applications, which follow the Model-View-Controller design paradigm. Models for interacting with your database and retrieving information from your objects and pages are rendered using views.
On top of Model –View – Controller design pattern, other design patterns in Laravel include: Facades Pattern, Strategy Pattern, Repository Pattern, Factory pattern, Publisher Subscriber pattern, and Provider Pattern.
In Model –View – Controller design pattern, Models can be found in App\Models, Views : resources\views, Controllers : App\Http\Controllers.
Builder / Manager Pattern : you can have an implementation of this pattern at the Illuminate\Auth\AuthManager or Illuminate\Session\SessionManager
Factory Pattern : you can have an implementation of this pattern at the Illuminate\Database\DatabaseManager or Illuminate\Validation\Factory
Repository Pattern : you can have an implementation of this pattern at the Illuminate\Config\Repository or Illuminate\Cache\Repository
Strategy Pattern : you can have an implementation of this pattern at the IIlluminate\Cache\StoreInterface or Illuminate\Config\LoaderInterface
