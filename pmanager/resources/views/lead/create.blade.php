<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image"
          content="https://tailwindcomponents.com/storage/9821/conversions/temp26138-ogimage.jpg?v=2023-10-04 11:43:35"/>
    <meta property="og:image:width" content="1280"/>
    <meta property="og:image:height" content="640"/>
    <meta property="og:image:type" content="image/png"/>

    <meta property="og:url" content="https://tailwindcomponents.com/component/responsive-form-4/landing"/>
    <meta property="og:title" content="Tailwind CSS Responsive Form by workwhileweb"/>
    <meta property="og:description" content="A clean Tailwind CSS form layout that is also responsive for mobile."/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@TwComponents"/>
    <meta name="twitter:title" content="Tailwind CSS Responsive Form by workwhileweb"/>
    <meta name="twitter:description" content="A clean Tailwind CSS form layout that is also responsive for mobile."/>
    <meta name="twitter:image"
          content="https://tailwindcomponents.com/storage/9821/conversions/temp26138-ogimage.jpg?v=2023-10-04 11:43:35"/>

    <link rel="canonical" href="https://tailwindcomponents.com/component/responsive-form-4" itemprop="URL">

    <title>Create Lead </title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
<div class="fixed bottom-0 left-0 right-0 z-40 px-4 py-3 text-center text-white bg-gray-800">
    This a Tailwind CSS Responsive Form by workwhileweb.
    <a class="text-gray-200 underline" href="https://tailwindcomponents.com/component/responsive-form-4">Component
        details</a>
</div>
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-xl text-gray-600">Create Lead Form</h2>
            <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Personal Details</p>
                        <p>Please fill out all the fields.</p>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name"
                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""/>
                            </div>
                            <div class="md:col-span-5">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" name="middle_name" id="middle_name"
                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""/>
                            </div>

                            <div class="md:col-span-5">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name"
                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""/>
                            </div>
                            <div class="md:col-span-5">
                                <div inline-datepicker data-date="02/25/2022"></div>
                            </div>


                            <div class="md:col-span-5">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email"
                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                       placeholder="email@domain.com"/>
                            </div>

                            <div class="md:col-span-3">
                                <label for="address">Address / Street</label>
                                <input type="text" name="address" id="address"
                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder=""/>
                            </div>

                            <div class="md:col-span-2">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city"
                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder=""/>
                            </div>

                            <div class="md:col-span-2">
                                <label for="country">Country / region</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="country" id="country" placeholder="Country"
                                           class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                           value=""/>
                                    <button tabindex="-1"
                                            class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label for="state">State / province</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="State"
                                           class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                           value=""/>
                                    <button tabindex="-1"
                                            class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="md:col-span-1">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" name="zipcode" id="zipcode"
                                       class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                       placeholder="" value=""/>
                            </div>

                            <div class="md:col-span-5">
                                <div class="inline-flex items-center">
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox"/>
                                    <label for="billing_same" class="ml-2">My billing address is different than
                                        above.</label>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <div class="inline-flex items-center">
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox"/>
                                    <label for="billing_same" class="ml-2">My billing address is different than
                                        above.</label>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <div class="inline-flex items-center">
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox"/>
                                    <label for="billing_same" class="ml-2">My billing address is different than
                                        above.</label>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <div class="inline-flex items-center">
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox"/>
                                    <label for="billing_same" class="ml-2">My billing address is different than
                                        above.</label>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <div class="inline-flex items-center">
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox"/>
                                    <label for="billing_same" class="ml-2">My billing address is different than
                                        above.</label>
                                </div>
                            </div>
                            <div class="md:col-span-5">
                                <div class="inline-flex items-center">
                                    <input type="checkbox" name="billing_same" id="billing_same" class="form-checkbox"/>
                                    <label for="billing_same" class="ml-2">My billing address is different than
                                        above.</label>
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label for="soda">How many soda pops?</label>
                                <div class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <input name="soda" id="soda" placeholder="0"
                                           class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                           value="0"/>
                                    <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 fill-current"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>


                            <div class="md:col-span-5 text-right">
                                <div class="inline-flex items-end">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</body>
</html>
