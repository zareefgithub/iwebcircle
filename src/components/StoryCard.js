import React from 'react';

const StoryCard = ({ story }) => {
  return (
    <div className="story-card">
      <div className="story-card__image">
        <img src={story.image} alt={story.title} />
      </div>
      <div className="story-card__content">
        <h3 className="story-card__title">{story.title}</h3>
        <p className="story-card__description">{story.description}</p>
        <button className="story-card__button" onClick={() => handleViewStory(story)}>
          View Story
        </button>
      </div>
    </div>
  );
};

const handleViewStory = (story) => {
  // Implement logic to navigate to the full story page
  console.log('Viewing story:', story);
};

export default StoryCard;