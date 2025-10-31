import React, { useState, useEffect } from 'react';
import StoryCard from '../components/StoryCard';

const OutStoriesPage = () => {
  const [stories, setStories] = useState([]);

  useEffect(() => {
    // Fetch story data from the backend
    fetchStories();
  }, []);

  const fetchStories = async () => {
    try {
      const response = await fetch('/api/stories');
      const data = await response.json();
      setStories(data);
    } catch (error) {
      console.error('Error fetching stories:', error);
    }
  };

  return (
    <div className="out-stories-page">
      <h1 className="out-stories-page__title">Out Stories</h1>
      <div className="out-stories-page__cards">
        {stories.map((story) => (
          <StoryCard key={story.id} story={story} />
        ))}
      </div>
    </div>
  );
};

export default OutStoriesPage;