    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/', function () {
        return view('sd');
    })->name('sd');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/about.team', function () {
        return view('about.team');
    })->name('about.team');

    Route::get('/about.story', function () {
        return view('about.story');
    })->name('about.story');

    Route::get('/about.care', function () {
        return view('about.care');
    })->name('about.care');


    Route::get('/services', function () {
        return view('services');
    })->name('services');

    Route::get('/bss', function () {
        return view('bss');
    })->name('bss');

    Route::get('/pt', function () {
        return view('pt');
    })->name('pt');

    Route::get('/as1', function () {
        return view('as1');
    })->name('as1');

    Route::get('/hcpc', function () {
        return view('hcpc');
    })->name('hcpc');

    Route::get('/as', function () {
        return view('as');
    })->name('as');

    Route::get('/doctor', function () {
        return view('doctor');
    })->name('doctor');

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/address', function () {
        return view('address');
    })->name('address');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/chat', function () {
        return view('chat');
    })->name('chat');

    Route::get('/services.training', function () {
        return view('services.training');
    })->name('services.training');


    Route::get('/pet-moments', function () {
        return view('pet-moments');
    })->name('pet-moments');

    Route::get('/pet-moments.photos', function () {
        return view('pet-moments.photos');
    })->name('pet-moments.photos');

    Route::get('/pet-moments.stories', function () {
        return view('pet-moments.stories');
    })->name('pet-moments.stories');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/cart', function () {
        return view('cart');
    })->name('cart');

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    ?>
    
