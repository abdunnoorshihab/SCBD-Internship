<?php require_once('header.php'); ?>

  <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl text-center font-bold text-gray-800 mb-6">Request for Proposal (RFP) Form</h1>
    <form action="#" method="POST" class="space-y-6">
      <!-- Section: Company Information -->
      <div>
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Company Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="company-name" class="block text-sm font-medium text-gray-600">Company Name</label>
            <input type="text" id="company-name" name="company-name" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div>
            <label for="contact-person" class="block text-sm font-medium text-gray-600">Contact Person</label>
            <input type="text" id="contact-person" name="contact-person" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-600">Phone Number</label>
            <input type="tel" id="phone" name="phone" 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div class="md:col-span-2">
            <label for="address" class="block text-sm font-medium text-gray-600">Company Address</label>
            <textarea id="address" name="address" rows="3" required 
                      class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
        </div>
      </div>

      <!-- Section: Project Details -->
      <div>
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Project Details</h2>
        <div class="space-y-4">
          <div>
            <label for="project-title" class="block text-sm font-medium text-gray-600">Project Title</label>
            <input type="text" id="project-title" name="project-title" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div>
            <label for="description" class="block text-sm font-medium text-gray-600">Project Description</label>
            <textarea id="description" name="description" rows="5" required 
                      class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
          <div>
            <label for="requirements" class="block text-sm font-medium text-gray-600">Specific Requirements</label>
            <textarea id="requirements" name="requirements" rows="4" 
                      class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
          <div>
            <label for="budget" class="block text-sm font-medium text-gray-600">Estimated Budget</label>
            <input type="number" id="budget" name="budget" step="0.01" 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div>
            <label for="timeline" class="block text-sm font-medium text-gray-600">Preferred Timeline</label>
            <input type="text" id="timeline" name="timeline" 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
        </div>
      </div>

      <!-- Section: Submission -->
      <div>
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Submission Information</h2>
        <div class="space-y-4">
          <div>
            <label for="submission-deadline" class="block text-sm font-medium text-gray-600">Submission Deadline</label>
            <input type="date" id="submission-deadline" name="submission-deadline" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div>
            <label for="additional-info" class="block text-sm font-medium text-gray-600">Additional Information (if any)</label>
            <textarea id="additional-info" name="additional-info" rows="3" 
                      class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Submit Proposal Request
        </button>
      </div>
    </form>
  </div>

<?php require_once('footer.php'); ?>

