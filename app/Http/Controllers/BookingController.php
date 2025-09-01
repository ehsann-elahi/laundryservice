<?php

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerBookingConfirmation;
use App\Mail\AdminBookingNotification;
use App\Models\Notification;

class BookingController extends Controller
{
    public function bookingForm()
    {
        $categories = [
            [
                'name' => 'Wash',
                
               'image' => asset('assets/front/icons/wash.png'),
            ],
            [
                'name' => 'Pressing',
                
                'image' => asset('assets/front/icons/ironing.png'),
            ],
            [
                'name' => 'Wash & Press',
                
                'image' => asset('assets/front/icons/clean_and_iron.png'),
            ],
            [
                'name' => 'Dry Clean',
                
                'image' => asset('assets/front/icons/duvets_and_bulky_items.png'),
            ],
        ];

        $cats = Category::get();
        return view('front.bookingForm', compact('categories', 'cats'));
    }

    public function getDateTime(Request $request)
    {
        // Retrieve the data sent from the AJAX request
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $address = $request->input('address');


        if ($lat && $lng) {
            // Calculate the nearest city or process the coordinates in some other way
            $nearestCity = $this->findNearestCity($lat, $lng, $this->mainCities());

            // Optionally, update the order creation logic with the city times or other parameters
            $times = $this->getTimesForCity($nearestCity);

            // Prepare data for AJAX response
            $responseData = [
                'success' => true,
                'address' => $address,
                'nearestCity' => $nearestCity,
                'times' => $times,
            ];

            return response()->json($responseData);  // Return data as a JSON response
        }

        // If coordinates are not provided or something goes wrong
        return response()->json([
            'success' => false,
            'message' => 'Could not get coordinates for the given address.',
        ]);
    }

    public function findNearestCity($lat, $lng, $cities)
    {

        // Nearest city calculation
        $nearestCity = null;
        $minDistance = INF;  // Start with a very large value to ensure we find the minimum distance

        foreach ($cities as $city) {
            // Simple Euclidean distance calculation (this is an approximation)
            $distance = sqrt(pow($city['lat'] - $lat, 2) + pow($city['lng'] - $lng, 2));

            if ($distance < $minDistance) {
                $minDistance = $distance;
                $nearestCity = $city['name'];  // Assuming 'name' is the name of the city
            }
        }

        return $nearestCity;
    }

    public function mainCities()
    {
        return [
            ['name' => "Palm Jebel Ali", 'lat' => 25.0125, 'lng' => 55.1215],
            ['name' => "The Palm Jumeirah", 'lat' => 25.1124, 'lng' => 55.1385],
            ['name' => "Mina Jebel Ali", 'lat' => 24.9831, 'lng' => 55.0076],
            ['name' => "Dubai Marina", 'lat' => 25.0760, 'lng' => 55.1404],
            ['name' => "Jumeirah", 'lat' => 25.1915, 'lng' => 55.2405],
            ['name' => "Mirdif", 'lat' => 25.2135, 'lng' => 55.4235],
            ['name' => "Al Warqa", 'lat' => 25.1747, 'lng' => 55.3836],
            ['name' => "Dubai Silicon Oasis", 'lat' => 25.1212, 'lng' => 55.3819],
            ['name' => "Academic City", 'lat' => 25.1551, 'lng' => 55.3745],
            ['name' => "Liwan", 'lat' => 25.1271, 'lng' => 55.3347],
            ['name' => "The Villa", 'lat' => 25.0569, 'lng' => 55.2652],
            ['name' => "Wadi Al Safa", 'lat' => 25.0681, 'lng' => 55.3040],
            ['name' => "Falcon City of Wonders", 'lat' => 25.0544, 'lng' => 55.3140],
            ['name' => "Al Barari", 'lat' => 25.0768, 'lng' => 55.3397],
            ['name' => "Majan", 'lat' => 25.0783, 'lng' => 55.3155],
            ['name' => "City of Arabia", 'lat' => 25.0610, 'lng' => 55.2788],
            ['name' => "Al Reem", 'lat' => 25.0688, 'lng' => 55.2977],
            ['name' => "Arabian Ranches", 'lat' => 25.0428, 'lng' => 55.2675],
            ['name' => "Arjan Dubai Land", 'lat' => 25.0591, 'lng' => 55.2455],
            ['name' => "Jumeirah Village Circle", 'lat' => 25.0440, 'lng' => 55.2075],
            ['name' => "Jumeirah Village Triangle", 'lat' => 25.0457, 'lng' => 55.1909],
            ['name' => "Motor City", 'lat' => 25.0450, 'lng' => 55.2432],
            ['name' => "Dubai Studio City", 'lat' => 25.0671, 'lng' => 55.2250],
            ['name' => "Green Community Village", 'lat' => 25.0258, 'lng' => 55.1705],
            ['name' => "Al Furjan", 'lat' => 25.0203, 'lng' => 55.1522],
            ['name' => "All Islands", 'lat' => 25.1354, 'lng' => 55.2009]
        ];
    }

    public function getTimesForCity($nearestCity)
    {
        // Define time slots for each city
        $cityTimeSlots = [
            'Palm Jebel Ali' => ['start' => '07:00 AM', 'end' => '08:00 AM'],
            'Mina Jebel Ali' => ['start' => '07:00 AM', 'end' => '08:00 AM'],
            'Al Furjan' => ['start' => '07:00 AM', 'end' => '08:00 AM'],
            'The Palm Jumeirah' => ['start' => '08:30 AM', 'end' => '09:30 AM'],
            'Dubai Marina' => ['start' => '08:30 AM', 'end' => '09:30 AM'],
            'All Islands' => ['start' => '08:30 AM', 'end' => '09:30 AM'],
            'Jumeirah' => ['start' => '10:00 AM', 'end' => '12:00 PM'],
            'Jumeirah Village Circle' => ['start' => '12:30 PM', 'end' => '02:30 PM'],
            'Arjan Dubai Land' => ['start' => '12:30 PM', 'end' => '02:30 PM'],
            'The Villa' => ['start' => '12:30 PM', 'end' => '02:30 PM'],
            'Wadi Al Safa' => ['start' => '12:30 PM', 'end' => '02:30 PM'],
            'Dubai Silicon Oasis' => ['start' => '03:30 PM', 'end' => '05:30 PM'],
            'Al Warqa' => ['start' => '03:30 PM', 'end' => '05:30 PM'],
            'Mirdif' => ['start' => '03:30 PM', 'end' => '05:30 PM'],
            'Liwan' => ['start' => '03:30 PM', 'end' => '05:30 PM'],
            'default' => ['start' => '09:00 AM', 'end' => '10:00 AM'],
        ];

        // Get the correct time slot for the nearest city, defaulting to 'default' if not found
        $timeSlot = $cityTimeSlots[$nearestCity] ?? $cityTimeSlots['default'];

        // Get the current date and time
        $currentDate = new \DateTime();
        $currentTime = $currentDate->format('h:i A');

        // Adjust collection and delivery times based on the current time
        $collectDay = $this->getCollectDay($currentDate, $currentTime, $timeSlot['start'], $timeSlot['end']);
        $dlvrDay = $currentDate->modify('+1 day')->format('Y-m-d'); // Delivery day is always the next day
        $collectTime = $timeSlot['start'] . ' - ' . $timeSlot['end'];
        $dlvrTime = $timeSlot['start'] . ' - ' . $timeSlot['end'];

        // Return the times
        return compact('collectDay', 'collectTime', 'dlvrDay', 'dlvrTime');
    }

    public function getCollectDay($currentDate, $currentTime, $startTime, $endTime)
    {
        // Check if current time is within the defined time range
        if ($this->isWithinTimeRange($currentTime, $startTime, $endTime)) {
            return $currentDate->format('Y-m-d');
        } elseif ($this->convertToMinutes($currentTime) < $this->convertToMinutes($startTime)) {
            return $currentDate->format('Y-m-d');
        } else {
            $currentDate->modify('+1 day');
            return $currentDate->format('Y-m-d');
        }
    }

    public function isWithinTimeRange($currentTime, $startTime, $endTime)
    {
        return $this->convertToMinutes($currentTime) >= $this->convertToMinutes($startTime) &&
            $this->convertToMinutes($currentTime) <= $this->convertToMinutes($endTime);
    }

    public function convertToMinutes($time)
    {
        $timeParts = explode(':', $time);
        $hours = (int)$timeParts[0];
        $minutes = (int)substr($timeParts[1], 0, 2);
        $amPm = substr($timeParts[1], 3, 2);

        if (strtoupper($amPm) == 'PM' && $hours < 12) {
            $hours += 12;
        }

        return $hours * 60 + $minutes;
    }

    // fetch service
    public function fetchServicesByCategory(Request $request)
    {
        $category = $request->input('category');  // Main category (Wash, Pressing, etc.)
        $subCategory = $request->input('subCategory');  // Subcategory (Men, Women, etc.)

        // Start with the Service model query
        
        $query = Service::query();

        // Filter by main category prices
        if ($category == 'Wash') {
            $query->where('W_Price', '>', 0);
        } elseif ($category == 'Pressing') {
            $query->where('P_Price', '>', 0);
        } elseif ($category == 'Wash & Press') {
            $query->where('WP_Price', '>', 0);
        } elseif ($category == 'Dry Clean') {
            $query->where('DC_Price', '>', 0);
        }

        // Filter by subcategory if provided (Men, Women, Linen & Bedding, etc.)
        if ($subCategory) {
            $query->where('category', $subCategory);  // Assuming 'category' is the column that stores Men/Women/etc.
        }

        // Get the filtered services
        $services = $query->get();

        return response()->json($services);
    }

    // order create

    public function bookOrder(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'info' => 'nullable|string|max:255',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'collectDay' => 'required|date',
            'collectTime' => 'required|string',
            'dlvrDay' => 'required|date',
            'dlvrTime' => 'required|string',
            'payment' => 'required|string',
            'delivery_option_1' => 'nullable|string',
            'delivery_option_2' => 'nullable|string',
            'specialInstruction' => 'nullable|string',
            'freq' => 'nullable|string',
            'services' => 'nullable|array',
        ]);

        // Try to find the customer by email or phone number
        $customer = null;

        if (!empty($request->email)) {
            $customer = Customer::where('email', $request->email)->first();
        }

        if (!$customer && !empty($request->phone_number)) {
            $customer = Customer::where('phone_number', $request->phone_number)->first();
        }

        // If customer is found or new customer needs to be created
        if ($customer) {
            // Update customer details if they exist
            $customer->name = $request->name;
            $customer->customer_type = 'B2C';
            $customer->email = $request->email;
            $customer->phone_number = $request->phone_number;
            $customer->address = $request->address;
            $customer->info = $request->info;
            $customer->latitude = $request->lat;
            $customer->longitude = $request->lng;
            $customer->geolocation = 'https://www.google.com/maps/place/' . $request->lat . ',' . $request->lng;
            $customer->save();
        } else {
            // If customer doesn't exist, create a new one
            $customer = new Customer();
            $customer->name = $request->name;
            $customer->customer_type = 'B2C';
            $customer->email = $request->email;
            $customer->phone_number = $request->phone_number;
            $customer->address = $request->address;
            $customer->info = $request->info;
            $customer->latitude = $request->lat;
            $customer->longitude = $request->lng;
            $customer->geolocation = 'https://www.google.com/maps/place/' . $request->lat . ',' . $request->lng;
            $customer->save();
        }

        // Now that we have the customer, create a booking
        $booking = new Booking();
        $booking->customer_id = $customer->id;
        $booking->services = implode(',', $validatedData['services']);
        $booking->collectDay = $validatedData['collectDay'];
        $booking->collectTime = $validatedData['collectTime'];
        $booking->job_status = 'Pickup';
        $booking->collectInstruc = $validatedData['delivery_option_2'];
        $booking->dlvrDay = $validatedData['dlvrDay'];
        $booking->dlvrTime = $validatedData['dlvrTime'];
        $booking->dlvrInstruc = $validatedData['delivery_option_1'];
        $booking->specialInstruction = $validatedData['specialInstruction'] ?? null;
        $booking->freq = $validatedData['freq'];
        $booking->paymentMethod = $validatedData['payment'];
        $booking->trn_num = $validatedData['trn_num'] ?? null;
        $booking->price_list = 'services';
        $this->updateNextOrderDate($booking, $validatedData['freq']);

        // Save the booking
        $booking->save();


        Notification::create([
            'type' => 'booking',
            'message' => 'New order received. Order ID: #' . $booking->id,
        ]);

        // Load the relationship to access customer in email templates
        $booking->load('customer');

        $adminEmail = env('ADMIN_EMAIL');
        // Send email to customer
        // Mail::to($customer->email)->send(new CustomerBookingConfirmation($booking));

        // Send email to admin (replace with your actual admin email)
        // Mail::to($adminEmail)->send(new AdminBookingNotification($booking));

        // Return success message
        return response()->json(['message' => 'Booking successful!', 'bookingId' => $booking->id], 200);
    }

    private function updateNextOrderDate($booking, $freq)
    {
        switch ($freq) {
            case 'Weekly':
                $booking->next_order_date = now()->addWeek()->toDateString(); // Only date
                break;
            case 'Every Two Weeks':
                $booking->next_order_date = now()->addWeeks(2)->toDateString(); // Only date
                break;
            case 'Every Four Weeks':
                $booking->next_order_date = now()->addWeeks(4)->toDateString(); // Only date
                break;
            default:
                $booking->next_order_date = null; // For "Just Once", no next order date
                break;
        }
    }
}
