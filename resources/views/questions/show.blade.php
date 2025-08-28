<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $question->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $question->title }}</h1>
            
            <div class="flex items-center text-sm text-gray-600 mb-6">
                <span class="mr-4">Asked by: {{ $question->user->name }}</span>
                <span>Created: {{ $question->created_at->format('M j, Y') }}</span>
            </div>
            
            <div class="prose max-w-none mb-8">
                <p class="text-gray-700 leading-relaxed">{{ $question->body }}</p>
            </div>
            
            <div class="flex items-center space-x-4 text-sm text-gray-600">
                <span>Views: {{ $question->view_count }}</span>
                <span>Answers: {{ $question->answer_count }}</span>
                <span>Votes: {{ $question->vote_count }}</span>
            </div>
            
            <div class="mt-8">
                <a href="{{ route('questions.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-md transition duration-200">
                    Ask Another Question
                </a>
            </div>
        </div>
    </div>
</body>
</html>
