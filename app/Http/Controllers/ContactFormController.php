<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator; // Make sure this line is here
use App\Mail\ContactFormSubmitted; // Make sure this line is here

class ContactFormController extends Controller
{ // <-- Brace #1 for the Class

    public function submit(Request $request)
    { // <-- Brace #2 for the Method

        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // If validation passes, try to send the email
        try {
            Mail::to('keshavsharma8481@gmail.com')->send(new ContactFormSubmitted($request->all()));

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you soon.'
            ]);

        } catch (\Exception $e) {
            // IMPORTANT: Revert this back to the original code now.
            // report($e); 
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Sorry, something went wrong. Please try again later.'
            // ], 500);
            return response($e->getMessage(), 500);
        }

    } // <-- Brace #2 for the Method ENDS here

} // <-- Brace #1 for the Class ENDS here

// THERE SHOULD BE NO EXTRA '}' AFTER THIS LINE