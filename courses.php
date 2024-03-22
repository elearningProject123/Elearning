<?php
$courses = [
    ['id' => 1, 'title' => 'Web Development', 'image' => 'web-development.jpg', 'description' => 'Learn front-end and back-end web development.'],
    ['id' => 2, 'title' => 'Data Science', 'image' => 'data-science.jpg', 'description' => 'Explore the world of data science and analytics.'],
    ['id' => 3, 'title' => 'Mobile App Development', 'image' => 'mobile-app-development.jpg', 'description' => 'Build mobile applications for iOS and Android.'],
    // Add more courses as needed
];

foreach ($courses as $course) {
    echo "<div class='course-card' onclick='showDetails({$course['id']})'>";
    echo "<img src='images/{$course['image']}' alt='{$course['title']}'>";
    echo "<h3>{$course['title']}</h3>";
    echo "</div>";
}
?>

