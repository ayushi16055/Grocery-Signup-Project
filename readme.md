<h1>Business Sign-Up Page with PHP, HTML/CSS, and Google reCAPTCHA Integration</h1>

<h2>Project Overview</h2>
<p>This project aims to create a sign-up page for a business using PHP for server-side processing, HTML/CSS for form design, and integrating Google reCAPTCHA to enhance security measures.</p>

<h2>Features Included</h2>
<ul>
  <li><strong>Sign-Up Form:</strong>
    <ul>
      <li>Designed using HTML and CSS to collect user information such as full name, email, password, etc.</li>
    </ul>
  </li>
  <li><strong>PHP Backend:</strong>
    <ul>
      <li>Utilizes PHP for server-side validation and processing of form data.</li>
    </ul>
  </li>
  <li><strong>Google reCAPTCHA Integration:</strong>
    <ul>
      <li>Integrated Google reCAPTCHA to prevent spam and abuse, ensuring that form submissions are from real users.</li>
    </ul>
  </li>
</ul>

<h2>Project Structure</h2>
<pre><code>
|- css/
|  |- styles.css           # Stylesheet for the sign-up form
|- dashboard.php            # Dashboard PHP file
|- signup_form.html         # HTML file for the sign-up form
|- signup_process.php       # PHP file for processing sign-up form data
|- README.md                # Documentation file
</code></pre>

<h2>Getting Started</h2>
<p>Clone the repository:</p>
<pre><code>
git clone https://github.com/ayushi16055/Grocery-Signup-Project.git
</code></pre>
<p>Obtain Google reCAPTCHA API Keys:</p>
<ul>
  <li>Visit the Google reCAPTCHA website to get the necessary API keys.</li>
  <li>Update the reCAPTCHA site key in the HTML form (e.g., in signup_form.html) within the g-recaptcha attribute.</li>
  <li>Update the reCAPTCHA secret key in the PHP file (e.g., signup_process.php) handling form submission for server-side verification.</li>
</ul>
<p>Set Up a Local Server:</p>
<ul>
  <li>Use PHP's built-in server or any local server environment to run the application.</li>
  <li>Open the signup_form.html file in a web browser to access the sign-up form.</li>
</ul>

<h2>Usage</h2>
<ol>
  <li>Fill in the required fields in the sign-up form.</li>
  <li>Complete the reCAPTCHA verification.</li>
  <li>Submit the form to register.</li>
</ol>

<h2>Dependencies</h2>
<p>Bootstrap v4.0.0</p>
<p>CDN link: <a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/#quick-start">Bootstrap CDN</a></p>

<h2>Resources</h2>
<ul>
  <li><a href="https://developers.google.com/recaptcha">Google reCAPTCHA Documentation</a></li>
  <li><a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/">Bootstrap Documentation</a></li>
</ul>

<h2>Contributors</h2>
<ul>
  <li>Ayushi Choudhary</li>
</ul>
