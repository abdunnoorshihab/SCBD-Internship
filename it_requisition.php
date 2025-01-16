<?php require_once('header.php');?>

  <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-700 mb-6">IT Requisition Form</h1>
    <form action="#" method="POST" class="space-y-6">
      <!-- Section: Requester Information -->
      <div>
        <h2 class="text-xl font-semibold text-gray-600 mb-2">Requester Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label for="department" class="block text-sm font-medium text-gray-600">Department</label>
            <input type="text" id="department" name="department" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-600">Phone</label>
            <input type="tel" id="phone" name="phone" 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
        </div>
      </div>

      <!-- Section: Requisition Details -->
      <div>
        <h2 class="text-xl font-semibold text-gray-600 mb-2">Requisition Details</h2>
        <div class="space-y-4">
          <div>
            <label for="item" class="block text-sm font-medium text-gray-600">Item/Service Requested</label>
            <input type="text" id="item" name="item" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label for="quantity" class="block text-sm font-medium text-gray-600">Quantity</label>
            <input type="number" id="quantity" name="quantity" min="1" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label for="reason" class="block text-sm font-medium text-gray-600">Reason for Request</label>
            <textarea id="reason" name="reason" rows="4" required 
                      class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
          </div>
          <div>
            <label for="priority" class="block text-sm font-medium text-gray-600">Priority</label>
            <select id="priority" name="priority" required 
                    class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
              <option value="Critical">Critical</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Section: Approval -->
      <div>
        <h2 class="text-xl font-semibold text-gray-600 mb-2">Approval Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="approver" class="block text-sm font-medium text-gray-600">Approver Name</label>
            <input type="text" id="approver" name="approver" required 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
          <div>
            <label for="approval-date" class="block text-sm font-medium text-gray-600">Approval Date</label>
            <input type="date" id="approval-date" name="approval-date" 
                   class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
          Submit Requisition
        </button>
      </div>
    </form>
  </div>

<?php require_once('footer.php');?>