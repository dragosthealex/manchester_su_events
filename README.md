INTRODUCTION
------------

The Manchester SU Events website aims to provide a pleasant and intuitive way of 
accessing the Welcome Week events and the future Societies' events.

API ENDPOINTS
-------------
 
The API returns Json objects with three attributes:
 - status   -> String.
   For successful requests without errors, response.status="success"
   For requests which encounter an error, response.status="error"
 - message
   For successful requests without errors, usually responses.message=""
   For requests which encounter an error, response.message= error message
 - data
   For successful requests without errors, usually response.data= the requested data
   For requests which encounter an error, response.data=""

   
 * /api/events

    Can be used simple or with one or more filters. The filtering is conjunctive
    (filters are AND-ed).

   - date_from -> Date. events after this date, included
   - date_to   -> Date. events before this date, included
   - date_on   -> Date. events exactly on this date
   - query     -> String. events that contain the given query in their title or description
   - category  -> Int. events that belong to the category given by this id
   - society   -> Int. events that belong to the society given by this id
   - author    -> Int. events that were created by the user given by this id


 * /api/events/{id}

    Returns the event given by id.


 * /api/categories

    Returns all the categories


 * /api/categories/{id}

    Returns the category given by id.


 * /api/societies

    Returns all the societies


 * /api/societies/{id}

    Returns the society given by id.