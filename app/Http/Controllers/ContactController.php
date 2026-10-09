<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    /**
     * Handle an incoming contact form submission.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        try {
            Mail::raw(
                "New inquiry from {$validated['name']} ({$validated['email']})\n" .
                'Phone: ' . ($validated['phone'] ?? '-') . "\n" .
                "Subject: {$validated['subject']}\n\n" .
                $validated['message'],
                function ($mail) use ($validated) {
                    $mail->to(config('mail.from.address'))
                        ->replyTo($validated['email'], $validated['name'])
                        ->subject('New Website Inquiry: ' . $validated['subject']);
                }
            );
        } catch (Throwable $e) {
            Log::error('Failed to send contact message: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', __('contact.alerts.error'));
        }

        return back()->with('success', __('contact.alerts.success'));
    }
}
