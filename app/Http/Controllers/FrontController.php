<?php

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\JobApplication;
use App\Models\Package;
use App\Models\Product;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\UserJobApplicationConfirmation;
use App\Mail\AdminJobApplicationNotification;
use App\Models\ShopCategory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;



class FrontController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(12);
        $packages = Package::where('weight', '6-Kg')->get();
        $allpackages = Package::where('weight', '!=', '6-Kg')->get();
        return view('front.index', compact('packages', 'allpackages', 'blogs'));
    }
    public function washnFold()
    {
        $categories = Category::get();
        return view('front.washnFold', compact('categories'));
    }

    public function pressing()
    {
        $categories = Category::get();
        return view('front.pressing', compact('categories'));
    }

    public function carpet()
    {
        return view('front.carpet');
    }
    // public function services()
    // {
    //     dd("done");
    //     return view('front.service');
    // }

    public function washNPress()
    {
        $categories = Category::get();

        return view('front.washNPress', compact('categories'));
    }


    public function curtainCleaning()
    {
        return view('front.curtainCleaning');
    }

    public function dryCleaning()
    {
        $categories = Category::get();
        return view('front.dryCleaning', compact('categories'));
    }

    public function dubai()
    {
            
        $packages = Package::where('weight', '6-Kg')->get();
        $allpackages = Package::where('weight', '!=', '6-Kg')->get();
        return view('front.dubai', compact('packages', 'allpackages'));
    }
    public function sharjah()
    {
        $packages = Package::where('weight', '6-Kg')->get();
        $allpackages = Package::where('weight', '!=', '6-Kg')->get();
        return view('front.sharjah', compact('packages', 'allpackages'));
    }


public function shop(Request $request)
{
    $categories = ShopCategory::all();

    if ($request->ajax()) {
        $products = Product::with('shopCategory')
            ->when($request->category, function ($query) use ($request) {
                return $query->where('shop_category_id', $request->category);
            })->get();

        $html = '';

        foreach ($products as $product) {
            $image = filter_var($product->main_image, FILTER_VALIDATE_URL)
                ? $product->main_image
                : asset('/assets/upload/shop/' . $product->main_image);

            $productUrl = route('product.detail', ['slug' => Str::slug($product->title)]);

            $html .= '
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                    <div class="th-product product-grid">
                        <a href="' . $productUrl . '">
                            <div class="product-img">
                                <img loading="lazy" style="height: 200px; width: 200px; object-fit: cover;"
                                     src="' . $image . '" alt="' . $product->title . '" class="img-fluid">
                                <span class="product-tag">Sale</span>
                            </div>
                        </a>
                        <div class="product-content">
                            <h3 class="product-title">
                                <a href="' . $productUrl . '">' . $product->title . '</a>
                            </h3>
                            <span class="count" style="color: #2B2F7B; font-weight: bold;">' . $product->price . '
                                <img class="aed2" style="width: 14px; vertical-align: middle;">';

            if ($product->old_price) {
                $html .= '<span class="old-price" style="margin-left: 5px;">' . $product->old_price . '
                              <img class="aed2" style="width: 14px; vertical-align: middle;">
                          </span>';
            }

            $html .= '</span>
                      <a class="icon-btn blue-icon addcart" data-id="' . $product->id . '">
                          <i class="far fa-cart-plus"></i>
                      </a>
                      <div class="star-rating mt-2">
                          <span>Rated <strong class="rating">5.00</strong> out of 5 based on
                              <span class="rating">1</span> customer rating
                          </span>
                      </div>
                    </div>
                  </div>
                </div>';
        }

        return response()->json($html);
    }

    $products = Product::with('shopCategory')->get();
    return view('front.shop', compact('products', 'categories'));
}




    public function itemDetail($slug)
    {
        $formattedTitle = str_replace('-', ' ', $slug);

        $product = Product::get()->filter(function ($item) use ($slug) {
            return Str::slug($item->title) === $slug;
        })->first();

        if (!$product) {
            abort(404);
        }

        return view('front.itemDetail', compact('product'));
    }

    public function price_abuDhabi()
    {
        $categories = Category::get();

        return view('front.price_abuDhabi', compact('categories'));
    }

public function price_dubai()
{
    $categories = DB::table('price_list_dubai')
        ->select('category')
        ->groupBy('category')
        ->get();

    return view('front.price_dubai', compact('categories'));
}


    public function price_ajman()
    {   $categories = DB::table('price_list_ajman_&_sharjah')
        ->select('category')
        ->groupBy('category')
        ->get();

    return view('front.price_ajman', compact('categories'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(12);
        return view('front.blog', compact('blogs'));
    }

    public function blogShow($slug)
    {
        // Get the specific blog by slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Get the previous blog (based on ID or custom logic)
        $previousBlog = Blog::where('id', '<', $blog->id)
            ->latest('id')
            ->first();

        // Get the next blog (based on ID or custom logic)
        $nextBlog = Blog::where('id', '>', $blog->id)
            ->oldest('id')
            ->first();

        // Get an additional latest blog excluding the current and previous/next
        $relatedBlogs = Blog::whereNotIn('id', [$blog->id, optional($previousBlog)->id, optional($nextBlog)->id])
            ->latest()
            ->take(1)
            ->get();

        return view('front.blog-single', compact('blog', 'previousBlog', 'nextBlog', 'relatedBlogs'));
    }


    public function syncCart(Request $request)
    {
        $cart = $request->input('cart', []);
        session()->put('cart', $cart);
        return response()->json(['status' => 'success']);
    }

 public function viewCart()
{
    $cart = session()->get('cart', []);
    $cartItems = [];
    $subtotal = 0;

    foreach ($cart as $id => $item) {
        // Add the item ID to each item
        $item['id'] = $id;

        // Push to the new cartItems array
        $cartItems[] = $item;

        // Calculate subtotal
        $subtotal += $item['price'] * $item['quantity'];
    }

    $shipping = 'Free';
    $total = $subtotal;

    return view('front.viewCart', compact('cartItems', 'subtotal', 'shipping', 'total'));
}


    public function cartUpdate(Request $request)
    {
        $itemId = $request->input('item_id');
        $action = $request->input('action');

        $cart = session()->get('cart', []);

        if (isset($cart[$itemId])) {
            if ($action === 'increase') {
                $cart[$itemId]['quantity'] += 1;
            } elseif ($action === 'decrease' && $cart[$itemId]['quantity'] > 1) {
                $cart[$itemId]['quantity'] -= 1;
            }
            session()->put('cart', $cart);

            return response()->json(['success' => true, 'cart' => $cart]);
        }

        return response()->json(['success' => false, 'message' => 'Item not found in cart.']);
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }


    // service get API
    public function getServices(Request $request)
    {
        $category = $request->input('category');

        if ($category) {
            $services = Service::where('category', $category)->get();
            return response()->json($services);
        }

        return response()->json([]);
    }

    public function thankYou($id)
    {
        return view('front.thank_you', compact('id'));
    }

    public function returnPolicy()
    {
        $setting = Setting::first();
        return view('front.returnPolicy', compact('setting'));
    }

    public function PrivacyPolicy()
    {
        $setting = Setting::first();
        return view('front.PrivacyPolicy', compact('setting'));
    }

    public function faq()
    {
        $setting = Setting::first();
        return view('front.faq', compact('setting'));
    }

    public function EHSPolicy()
    {
        $setting = Setting::first();
        return view('front.EHSPolicy', compact('setting'));
    }

    public function healthcareLaundry()
    {
        return view('front.healthcareLaundry');
    }

    public function jobs()
    {
        return view('front.jobs');
    }


    public function applyJob(Request $request)
    {
        $request->validate([
            'position' => 'required|in:Laundry Washer,Laundry Presser,Laundry Man,Laundry Supervisor,Delivery Captain',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'salary' => 'required|numeric',
            'joining_date' => 'required|date',
            'phone' => 'required|string|max:20',
            'document' => 'nullable|file|mimes:pdf,jpg,png|max:2048', // Allowed file types added
        ]);

        $filePath = null; // Initialize default file path

        if ($request->hasFile('document')) {
            $file = $request->file('document');

            // Generate unique file name
            $mainFileName = uniqid(time() . '_') . '.' . $file->getClientOriginalExtension();

            // Store file in storage/app/public/job-applications/
            $filePath = $file->storeAs('public/job-applications', $mainFileName);

            // Convert to URL for public access
            $filePath = asset(str_replace('public', 'storage', $filePath));
        }

        $application = JobApplication::create([
            'position' => $request->position,
            'name' => $request->name,
            'email' => $request->email,
            'salary' => $request->salary,
            'joining_date' => $request->joining_date,
            'phone' => $request->phone,
            'document' => $filePath, // It will be null if no file is uploaded
        ]);

        $adminEmail = env('ADMIN_EMAIL');

        // Send email to user
        Mail::to($application->email)->send(new UserJobApplicationConfirmation($application));

        // Send email to admin
        Mail::to($adminEmail)->send(new AdminJobApplicationNotification($application));

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function laundryNear()
    {
        $images = [
            ['path' => asset('/assets/images/khalifa.jpeg'), 'name' => 'Khalifa City'],
            ['path' => asset('/assets/images/alreef.jpg'), 'name' => 'Al Reef'],
            ['path' => asset('/assets/images/reem.jpeg'), 'name' => 'Reem Island'],
            ['path' => asset('/assets/images/yasisland.jpeg'), 'name' => 'Yas Island'],
            ['path' => asset('/assets/images/alraha.jpeg'), 'name' => 'Al Raha Beach'],
        ];

        return view('front.laundryNear', compact('images'));
    }

    public function laundryDetails($name)
    {
        $cleanName = str_replace('-', ' ', $name);

        $packages = Package::where('weight', '6-Kg')->get();

        return view('front.laundryDetails', compact('packages', 'cleanName'));
    }
    public function linenrental(){
        return view('front.linenrental');
    }
}
