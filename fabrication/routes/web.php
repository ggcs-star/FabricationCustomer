    <?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {

        $vendors = [

            [
                'id' => 1,
                'name' => 'Apex Metal Works',
                'logo' => 'https://cdn-icons-png.flaticon.com/512/681/681494.png',
                'distance' => '1.5 km away',
                'rating' => '4.7',
                'experience' => '10+ Years Experience',
                'services' => [
                    'Laser Cutting',
                    'Metal Gates',
                    'Sheet Metal'
                ]
            ],

            [
                'id' => 2,
                'name' => 'Titan Fabricators',
                'logo' => 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png',
                'distance' => '6.5 km away',
                'rating' => '4.5',
                'experience' => '8+ Years Experience',
                'services' => [
                    'Laser Cutting',
                    'Metal Gates',
                    'Sheet Metal'
                ]
            ]

        ];

        return view('landing', compact('vendors'));

    });

    Route::get('/vendors', function () {

        $vendors = [

            [
                'id' => 1,
                'name' => 'Apex Metal Works',
                'logo' => 'https://cdn-icons-png.flaticon.com/512/681/681494.png',
                'distance' => '1.5 km away',
                'rating' => '4.7',
                'experience' => '10+ Years Experience',
                'services' => [
                    'Laser Cutting',
                    'Metal Gates',
                    'Sheet Metal'
                ]
            ],

            [
                'id' => 2,
                'name' => 'Titan Fabricators',
                'logo' => 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png',
                'distance' => '6.5 km away',
                'rating' => '4.5',
                'experience' => '8+ Years Experience',
                'services' => [
                    'Laser Cutting',
                    'Metal Gates',
                    'Sheet Metal'
                ]
            ]

        ];

        return view('vendor', compact('vendors'));

    })->name('vendors');

    Route::get('/how-it-works', function () {
        return view('how-it-works');
    })->name('how-it-works');

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/faq', function () {
        return view('faq');
    });
    Route::get('/privacy-policy', function () {
        return view('privacy-policy');
    })->name('privacy-policy');

    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');

  Route::get('/profile', function () {
    return view('customer_profile');
})->name('profile');

    Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/vendor-profile', function () {
    return view('vendor_profile');
})->name('vendor-profile');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/account-actions', function () {
    return view('account-actions');
})->name('account-actions');

Route::get('/become-vendor', function () {
    return view('become-vendor');
})->name('become-vendor');

Route::post('/logout', function () {
    // Auth::logout();
    return redirect('/');
})->name('logout');

Route::view('/amc-plans', 'amc-plans');

Route::get('/track-project', function () {
    return view('track-project');
})->name('track-project');

Route::get('/quote-details', function () {
    return view('quote_details');
})->name('quote_details');