<h1> Posts </h1>

{% if posts is empty %}
    <p> No posts, yet. </p>
{% else %}
    {% for post in posts %}
    <div>
        <h2><a href ="{{urlFor("posts.show",{'postId':post.id})}}">{{ post.title }}</a></h2>
        <p> {{post.content}}</p>
    </div>
    {% endfor %}
{% endif %}    